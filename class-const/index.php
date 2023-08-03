<?php
require_once("./class.php");

use CLS\Transaction;

$transaction = new Transaction();
$transaction->setStatus("declined");
print_r($transaction);
