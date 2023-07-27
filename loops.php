<?php
// while
$i = 0;
while ($i <= 10) :
    echo $i++, "-";
endwhile;

echo "<br />";

// do while
$i = 0;
do {
    echo $i++ . "-";
} while ($i <= 15);

echo "<br />";

// for
$i = 0;
for ($i; $i <= 20; $i++) :
    echo $i . "-";
endfor;

echo "<br />";
echo "<br />";

// foreach
$i = [
    "php" => "Hypertext PreProcessor",
    "html" => "Hyper Text Markup Language",
    "css" => "Cascading Style Sheets",
    "js" => "JavaScript",
    "sql" => "Structured Query Language"
];

foreach ($i as $language => $fullForm) :
    echo "{$language} : {$fullForm}<br />";
endforeach;
