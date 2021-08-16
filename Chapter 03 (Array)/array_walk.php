<?php
$number = [1, 2, 3, 4, 5];

function square($n){
    echo $n * $n;
}

array_walk($number, 'square'); // this function only works for print anything. not retrn it.
