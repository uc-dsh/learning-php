<?php
require_once(__DIR__ . "/class.php");
$transaction1 = new Transaction(100);
echo $transaction1->setTransaction(new Transaction(200));
