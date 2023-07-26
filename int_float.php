<?php
// multiplying both int, float return value in float
$int = 1;
$float = 1.5;

var_dump($int * $float);
var_dump(!$int);

function sum (int $x, int $y){
    echo "<br />";
    return $x+$y;
}

var_dump(sum($int, $float));
