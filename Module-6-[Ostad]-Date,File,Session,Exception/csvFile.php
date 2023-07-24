<?php

$fileLocation = './f2.txt';
$file = fopen($fileLocation, 'r');

// while (($line = fgetcsv($file)) !== false) {
//     print_r($line);
// }
$data = file_get_contents($fileLocation);
// print_r ($data);
// $serializedVdata = serialize($data);
$serializedVdata = json_encode($data);
// echo $serializedVdata;
$jsonDecod = json_decode($serializedVdata);
echo $jsonDecod;