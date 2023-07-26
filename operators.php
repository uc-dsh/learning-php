<?php
// Arithmetic And Assignment Operator
$x = 1;
$y = 2;

$add = $x + $y;
$sub = $x - $y;
$div = $x / $y;
$modulus = $x % $y;
$pow = $x ** $y;
# Add and assign
$x += $y;
# Subtract and assign
$x -= $y;
# Multiply and assign
$x *= $y;
# Divide and assign
$x /= $y;
# Modulus and assign
$x %= $y;
# Pow and Assign
$x **= $y;

// String Operator
$f_name = "Joe";
$l_name = " Biden";

# Concat Operator
$name = $f_name . $l_name;

# Concat And Assign
$f_name .= $l_name;



// Comparison Operator
$int1 = 1;
$int2 = "1";
var_dump($int1 == $int2);
var_dump($int1 === $int2);
var_dump($int1 != $int2);
var_dump($int1 !== $int2);
var_dump($int1 <> $int2);
var_dump($int1 <= $int2);
var_dump($int1 >= $int2);
var_dump($int1 <=> $int2);
var_dump($int1 ?? $int2);

// Error Control Operator
echo @$error;


// Increment / Decrement Operator
$var1 = 1;

echo ++$var1;
echo --$var1;
echo $var1++;
echo $var1--;


// Logical Operator
$condition1 = true;
$condition2 = false;
# &&
var_dump($condition1 && $condition2);

# ||
var_dump($condition1 || $condition2);

# !
var_dump($condition1 == !$condition2);

