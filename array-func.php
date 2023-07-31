<?php
echo "<pre>";
$array = ["c" => 2, "a" => 3, "b" => 1, "e" => 4, "d" => 5];
$com1 = ["a", "b", "c"];
$com2 = ["e" => 10, 9, 8];
$multi_dim = [
    ["price" => 100, "quantity" => 2],
    ["price" => 34, "quantity" => 4],
    ["price" => 199, "quantity" => 3],
    ["price" => 120, "quantity" => 1],
    ["price" => 90, "quantity" => 3]
];
// array chunk
$chunk = array_chunk($array, 2, true);
// print_r($chunk);

// array combine
$combine = array_combine($com1, $com2);
// print_r($combine);

// array filter
$filter = array_filter($array, fn ($number) => $number % 2 === 0);
// print_r(array_values($filter));
// print_r(array_keys($filter));
// print_r($filter);

// array map
$map = array_map(fn ($number1, $number2) => $number1 + $number2, $array, $com2);
// print_r($map);

// array merge
$merge = array_merge($array, $com1, $com2);
// print_r($merge);

// array reduce
$reduce = array_reduce($multi_dim, fn ($sum, $item) => $sum + $item["quantity"] * $item["price"]);
// print_r($reduce);


// array search
$search1 = array_search("2", $array, true);
// print_r($search1);
if (in_array(2, $array, true)) {
    // echo "Value Exists";
}

// array difference
$diff = array_diff($array, $com1);
// print_r($diff);

// array sort
// print_r($array);
// // asort($array);
// // ksort($array);
// usort($array, fn ($a, $b) => $b <=> $a);
// print_r($array);


// array destructure
["a" => $a, "b" => $b, "c" => $c] = $array;
echo $a, $b, $c;
