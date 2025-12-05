<?php
require 'PhpSpreadsheet/vendor/autoload.php';
require 'db.inc'; // Inclui sua conexão $conn

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// --- TABELAS QUE VOCÊ QUER EXPORTAR ---
$tabelas = ['funcionarios','contratos','empresas']; // coloque as tabelas desejadas

$spreadsheet = new Spreadsheet();

// --- PERCORRE CADA TABELA ---
foreach ($tabelas as $index => $tbl) {
    $result = $conn->query("SELECT * FROM `$tbl`");

    if (!$result) {
        echo "Erro na tabela $tbl: " . $conn->error . "\n";
        continue;
    }

    $rows = $result->fetch_all(MYSQLI_ASSOC);

    if ($index == 0) {
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle($tbl);
    } else {
        $sheet = $spreadsheet->createSheet();
        $sheet->setTitle($tbl);
    }

    if (count($rows) > 0) {
        // Cabeçalhos
        $col = 1;
        foreach (array_keys($rows[0]) as $header) {
            $sheet->setCellValueByColumnAndRow($col, 1, $header);
            $col++;
        }

        // Dados
        $rowIndex = 2;
        foreach ($rows as $row) {
            $col = 1;
            foreach ($row as $value) {
                $sheet->setCellValueByColumnAndRow($col, $rowIndex, $value);
                $col++;
            }
            $rowIndex++;
        }
    }
}

// --- SALVAR ARQUIVO ---
$writer = new Xlsx($spreadsheet);
$arquivo = 'export_tabelas.xlsx';
$writer->save($arquivo);

echo "Arquivo Excel gerado com sucesso: $arquivo\n";
