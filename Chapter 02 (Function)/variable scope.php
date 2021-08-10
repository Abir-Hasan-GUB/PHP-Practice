<?php

$number = 10; // global variable number

function test () {
   global $number;
    echo $number;                    
}
test();

function add() {
   return $num = 5; //local scop
}

echo add();

echo PHP_EOL;

function doSomthing() {
    static $i; // static scop
    $i = $i ?? 0;
    $i++; //icriment
    echo $i . "\n";
}

doSomthing();
doSomthing();
doSomthing();
doSomthing(); 