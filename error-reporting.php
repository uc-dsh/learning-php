<?php
// error_reporting(E_ALL  & ~E_WARNING);
function ErrorHandle(int $type, string $msg, string $file, int $line)
{
    echo "An Level {$type} Error Found : <b>$msg</b> in : <b>$file</b> at line : <b>$line</b>";
}
set_error_handler('ErrorHandle');
echo $x;
