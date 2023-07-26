<?php
$x = true;
$y = false;

if($x == 1){
    echo "data fount <br />";
}else{
    echo "data not found <br />";
}

echo $x, $y, "<br />";

var_dump($x, $y);

$string_true = (string) true;
$string_false = (string) false;

var_dump($string_true, $string_false);

$int_true = (int) true;
$int_false = (int) false;

var_dump($int_true, $int_false);
