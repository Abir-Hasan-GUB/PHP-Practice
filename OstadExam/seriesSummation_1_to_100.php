<?php

function checkEvenOrOdd($value){
    if ($value % 2 == 0) {
        echo "{$value} => is even \n";
    } else {
        echo "{$value} => is Odd \n";
    }
}

checkEvenOrOdd(10);
checkEvenOrOdd(7);
checkEvenOrOdd(11);
checkEvenOrOdd(46);