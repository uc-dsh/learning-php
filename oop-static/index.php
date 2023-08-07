<?php
require_once(__DIR__ . "/class.php");

use CLS\User;

$user1 = new User("Abrar");
$user2 = new User("Aniket");
$user3 = new User("Priyam");
$user4 = new User("Rajan");
echo $user1->getUser();
echo $user2->getUser();
echo $user3->getUser();
echo $user4->getUser();