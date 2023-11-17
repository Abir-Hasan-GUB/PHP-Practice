<?php
$number = 49;

switch ($number){
    case $number % 7 == 0:
        echo("Number divisible by 7");
        break;
        case $number % 10 == 0:
            echo("Number divisible by 10");
            break;
            default: echo("Number is not divisible by 5 or 10");
}

echo("\n".abs(ceil(-44.6))); //Absolute value of any number is always positive.