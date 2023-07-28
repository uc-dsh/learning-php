<?php

declare(strict_types=1);
echo "<pre />";
// $object = function (...$args) {
//     return $args;
// };

// $obj = $object(name: "Test User", email: "test@user.com", age: 20);

// print_r($obj);

// $pow = 2;
// $array = [1, 2, 3, 4, 5];
// $newArray = array_map(fn ($number) => $number ** $number * $pow, $array);
// print_r($newArray);


$map = function (int|float $number): int|float {
    return pow($number, 2);
};

$array = [1, 2, 3, 4, 5.4];
$newArray = array_map($map, $array);
print_r($newArray);
