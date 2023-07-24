<?php

$fileLocation = "./f1.txt";

$file = fopen($fileLocation, "a");
$readFile = fopen($fileLocation, "r");
fwrite($file, "One!\n");
fwrite($file, "Two!\n");
fwrite($file, "Three!\n");
fclose($file);

// Read File:
// echo fgets($readFile, 2048);

// while (($line = fgets($readFile, 1024)) !== false) {
//     echo $line;
// } 

// echo fread($readFile, filesize($fileLocation)); // read whole file

// echo file_get_contents($readFile);
 $allData = file_get_contents($fileLocation);
 file_put_contents($fileLocation, 'Abir', FILE_APPEND);
 echo ($allData);

//  is_readable($file); // check a file is readable or writable befor take an action...
//  is_wriatable($file); // check a file is writable or readable befor take an action...

