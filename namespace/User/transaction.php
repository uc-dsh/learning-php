<?php

namespace User;
use DateTime;
class Transaction
{
    public function __construct()
    {
        echo "User transaction class reached <br />";
    }
}


class Time{
    public function __construct(){
        print_r(new DateTime());
    }
}