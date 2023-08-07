<?php

namespace CLS;

class User
{
    public static int $count = 0;
    public string $Username;
    public int $CurrentUser;


    function __construct(string $name = 'Default UserName')
    {
        $this->Username = $name;
        self::$count++;
        $this->CurrentUser = self::$count;
    }

    function getUser(): string
    {
        return $this->CurrentUser . " : " . $this->Username . "<br />";
    }
}
