<?php
$number = [1, 2, 3, 4, 5];

function square($n){
    echo $n * $n . " ";
}

$test = array_walk($number, 'square'); // this function only works for print anything. not retrn it.
echo var_dump($test);