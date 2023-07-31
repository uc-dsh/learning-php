<?php
echo "<pre>";

// Scan Directory
$dir = scandir(__DIR__);
// print_r($dir);

// if(file_exists("./index.php")){
//     echo filesize("./index.php");
//     file_put_contents("./index.php", "Hello World");
//     clearstatcache();
//     echo filesize("./index.php");
// }

// if (file_exists(filename: "./csv/ex.csv")) :
//     $file = fopen("./csv/ex.csv", "r");
//     while (($line = fgetcsv($file)) !== false) {
//         print_r($line);
//     }
// endif;
// copy("./index.php", "./csv/copy.php");
unlink("./csv/copy.php");
// rename(to: "index.php", from: "./csv/index.php");
