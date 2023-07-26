<?php
echo "<pre>";

// Indexed Array
$array = [1, 2, 3];
print_r($array);
echo $array[1];

// Associative Array
$assoc_array = [
    "php" => "Hypertext PreProcessor",
    "HTML" => "Hyper Text Markup Language",
    "CSS" => "Cascading Style Sheets"
];
print_r($assoc_array);
echo $assoc_array["HTML"];

// Multidimensional Array
$multi_dimension_array = [
    ["data1" => "value1", "data2" => "value2"],
    $array,
    $assoc_array
];
print_r($multi_dimension_array);
echo $multi_dimension_array[0]["data2"];





// Basic Array Operations

# Function to check key exists in an array
if (key_exists("data1", $multi_dimension_array[0])) {
    echo "Yes, key exists";
} else {
    echo "No, Key not found!!";
}

# Pushing value to array
print_r($array);
$array[] = 4;
print_r($array);

# unset a value in array
## using unset
unset($array[3]);
print_r($array);

## using pop, shift
array_pop($array);
array_shift($array);
print_r($array);



// ReWrite a index of array
$array[0] = 1;
print_r($array);