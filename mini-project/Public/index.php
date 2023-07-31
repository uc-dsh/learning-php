<?php

declare(strict_types=1);
$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;
define("APP_PATH", $root . "App" . DIRECTORY_SEPARATOR);
define("FILES_PATH", $root . "Transactions" . DIRECTORY_SEPARATOR);
define("VIEW_PATH", $root . "View" . DIRECTORY_SEPARATOR);

require_once(APP_PATH . "app.php");
require_once(APP_PATH . "helper.php");

$trFiles = getTransactionFiles(FILES_PATH);
$transactions = [];
foreach ($trFiles as $file) {
    $transactions = array_merge($transactions, getTransaction($file, 'ExtractTransaction'));
}
$totals = CalculateTotals($transactions);

require_once(VIEW_PATH . "transaction.php");
