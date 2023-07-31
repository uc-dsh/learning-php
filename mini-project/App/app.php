<?php
function getTransactionFiles(string $dir): array
{
    $files = [];
    foreach (scandir($dir) as $fileNames) {
        if (is_dir($fileNames)) {
            continue;
        }
        $files[] = $dir . $fileNames;
    }
    return $files;
}


function getTransaction(string $filename, ?callable $transactionHandler = null): array
{
    if (!file_exists($filename)) {
        trigger_error("File: " . $filename . " Does not exists.", E_USER_ERROR);
    }
    $file = fopen($filename, "r");
    $transactions = [];
    fgetcsv($file);
    while (($transaction = fgetcsv($file)) !== false) :
        if ($transactionHandler !== null) {
            $transaction = $transactionHandler($transaction);
        }
        $transactions[] = $transaction;
    endwhile;
    return $transactions;
}

function ExtractTransaction(array $transaction): array
{
    [$date, $check_no, $description, $amount] = $transaction;
    $amount = str_replace(["$", ","], "", $amount);
    return [
        "date" => $date,
        "check_no" => $check_no,
        "description" => $description,
        "amount" => $amount
    ];
}

function CalculateTotals(array $transaction): array
{
    $totals = ["netTotal" => 0, "expense" => 0, "income" => 0];
    foreach ($transaction as $tr) {
        $totals["netTotal"] += $tr["amount"];
        if ($tr["amount"] >= 0) {
            $totals["income"] += $tr["amount"];
        } else {
            $totals["expense"] += $tr["amount"];
        }
    }
    return $totals;
}
