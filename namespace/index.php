<?php

require_once("./User/transaction.php");
require_once("./Vendor/transaction.php");

$userTransaction = new User\Transaction();
$vendorTransaction = new Vendor\Transaction();
$userTime = new User\Time();