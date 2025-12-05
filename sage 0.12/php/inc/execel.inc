<?php
// php/inc/execel.inc

// mostrar erros para debug (remova em produção)
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: application/json; charset=utf-8');

require __DIR__ . '/db.inc'; // ajuste se o db.inc estiver em outro lugar

$resp = [
    'ok' => false,
    'messages' => [],
    'generated' => []
];

// Verifica conexão
if (!isset($conn)) {
    $resp['messages'][] = "Conexão \$conn não encontrada. Verifique db.inc";
    echo json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    exit;
}

// TABELAS QUE DEVEM SER IGNORADAS
$ignorar = [
    "autorizacao_voz",
    "tb_fotos",
    "tb_curso",
    "tb_trilhas",
    "export_queue"
];

// Busca eventos não processados
$q = $conn->query("SELECT tabela FROM export_queue WHERE processado = 0");
if ($q === false) {
    $resp['messages'][] = "Erro na query export_queue: " . $conn->error;
    echo json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    exit;
}

if ($q->num_rows == 0) {
    $resp['messages'][] = "Nenhum evento pendente.";
    // Ainda assim echo ok=false para indicar sem trabalho
    echo json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    exit;
}

// Monta lista única de tabelas
$tabelas = [];
while ($row = $q->fetch_assoc()) {
    $tbl = $row['tabela'] ?? null;
    if ($tbl && !in_array($tbl, $ignorar)) $tabelas[$tbl] = true;
}
$tabelas = array_keys($tabelas);

if (empty($tabelas)) {
    $resp['messages'][] = "Somente tabelas ignoradas foram encontradas na fila.";
    // marca como processado mesmo assim para evitar loop (opcional)
    $conn->query("UPDATE export_queue SET processado = 1 WHERE processado = 0");
    echo json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    exit;
}

// Marca como processado (faz isto antes para evitar duplicação)
if ($conn->query("UPDATE export_queue SET processado = 1 WHERE processado = 0") === false) {
    $resp['messages'][] = "Erro ao atualizar export_queue: " . $conn->error;
}

$csvDir = __DIR__ . "/csv/";

if (!is_dir($csvDir)) {
    echo "erro: pasta csv NAO existe → " . $csvDir;
    exit;
}

if (!is_writable($csvDir)) {
    echo "erro: pasta csv SEM PERMISSAO → " . $csvDir;
    exit;
}


// Verifica permissões de escrita
if (!is_writable($csvDir)) {
    $resp['messages'][] = "Pasta $csvDir não gravável. Ajuste permissões do filesystem (chown/chmod).";
    echo json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    exit;
}

// Exporta cada tabela
foreach ($tabelas as $tbl) {
    $result = $conn->query("SELECT * FROM `$tbl`");
    if ($result === false) {
        $resp['messages'][] = "Erro na query SELECT * FROM `$tbl`: " . $conn->error;
        continue;
    }

    $rows = $result->fetch_all(MYSQLI_ASSOC);

    $csvPath = $csvDir . $tbl . '.csv';

    $fp = fopen($csvPath, 'w');
    if ($fp === false) {
        $resp['messages'][] = "Falha ao abrir arquivo para escrita: $csvPath";
        continue;
    }

    if (count($rows) > 0) {
        // Cabeçalho
        if (fputcsv($fp, array_keys($rows[0])) === false) {
            $resp['messages'][] = "Falha ao escrever cabeçalho em $csvPath";
        }

        // Linhas
        foreach ($rows as $r) {
            if (fputcsv($fp, $r) === false) {
                $resp['messages'][] = "Falha ao escrever linha em $csvPath";
                // não para, tenta continuar
            }
        }
    } else {
        // Se tabela vazia, criar CSV com cabeçalho vazio (ou opcionalmente deixar vazio)
        // fputcsv($fp, []); // opcional
    }

    fclose($fp);
    $resp['generated'][] = $csvPath;
    $resp['messages'][] = "CSV gerado: $csvPath";
}

$resp['ok'] = true;
echo json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
exit;
