<?php

function getValue()
{
    static $data = null;
    if ($data === null) {
        $data = getDataFromApi();
    }
    return $data;
}

function getDataFromApi()
{
    sleep(1);
    echo "Executed";
    return 3;
}

echo getValue(), "<br />";
echo getValue(), "<br />";
echo getValue(), "<br />";
