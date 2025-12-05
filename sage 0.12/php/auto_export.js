// execel_auto.js — JS soviético unificado

import fs from 'fs';
import path from 'path';
import mysql from 'mysql2/promise';
import fetch from 'node-fetch';

// =====================
// FUNÇÃO PRINCIPAL EXPORTADORA
// =====================
async function executarExportacao() {
    const resp = { ok: false, messages: [], generated: [] };

    let conn;
    try {
        conn = await mysql.createConnection({
            host: 'localhost',
            user: 'root',
            password: '',
            database: 'db_gcsg'
        });
    } catch (e) {
        resp.messages.push("Erro: não conectar no banco.");
        return resp;
    }

    const ignorar = [
        "autorizacao_voz",
        "tb_fotos",
        "tb_curso",
        "tb_trilhas",
        "export_queue"
    ];

    let [rows] = await conn.execute("SELECT tabela FROM export_queue WHERE processado = 0");

    if (!rows || rows.length === 0) {
        resp.messages.push("Nenhum evento pendente.");
        return resp;
    }

    let tabelas = [];
    for (let r of rows) {
        if (r.tabela && !ignorar.includes(r.tabela)) {
            if (!tabelas.includes(r.tabela)) tabelas.push(r.tabela);
        }
    }

    if (tabelas.length === 0) {
        resp.messages.push("Somente tabelas ignoradas foram encontradas na fila.");
        await conn.execute("UPDATE export_queue SET processado = 1 WHERE processado = 0");
        return resp;
    }

    try {
        await conn.execute("UPDATE export_queue SET processado = 1 WHERE processado = 0");
    } catch (err) {
        resp.messages.push("Erro ao atualizar export_queue: " + err.message);
    }

    const csvDir = path.join(process.cwd(), "csv");

    if (!fs.existsSync(csvDir)) {
        resp.messages.push("erro: pasta csv NAO existe → " + csvDir);
        return resp;
    }

    try {
        fs.accessSync(csvDir, fs.constants.W_OK);
    } catch (_) {
        resp.messages.push("erro: pasta csv SEM PERMISSAO → " + csvDir);
        return resp;
    }

    for (const tbl of tabelas) {
        let data;
        try {
            const [rows] = await conn.query(`SELECT * FROM ${tbl}`);
            data = rows;
        } catch (err) {
            resp.messages.push(`Erro na query SELECT * FROM ${tbl}: ` + err.message);
            continue;
        }

        const csvPath = path.join(csvDir, `${tbl}.csv`);
        const fp = fs.createWriteStream(csvPath);

        if (!data || data.length === 0) {
            fp.end();
            resp.generated.push(csvPath);
            resp.messages.push("CSV gerado (vazio): " + csvPath);
            continue;
        }

        const headers = Object.keys(data[0]);
        fp.write(headers.join(",") + "\n");

        for (const row of data) {
            const line = headers.map(h => JSON.stringify(row[h] ?? "")).join(",");
            fp.write(line + "\n");
        }

        fp.end();
        resp.generated.push(csvPath);
        resp.messages.push("CSV gerado: " + csvPath);
    }

    resp.ok = true;
    return resp;
}

// =====================
// LOOP AUTOMÁTICO SOVIÉTICO
// =====================
setInterval(async () => {
    const r = await executarExportacao();
    console.log("AUTO EXPORT:", JSON.stringify(r, null, 4));
}, 5000);

// Mensagem para mostrar que iniciou
console.log("Exportador automático iniciado - GDS");
