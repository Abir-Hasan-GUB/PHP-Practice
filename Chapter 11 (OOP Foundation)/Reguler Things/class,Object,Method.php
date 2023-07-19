<?php

class Human{
   public $name;
//    constractor decleration here

function __construct($name=''){
    $this->name = $name;
    $this->sayHi($name);
}
    
    function sayHi($name){
        echo "Hello ". $name;
        echo PHP_EOL;
    }
}

$humanObj1 = new Human('Abir');
$humanObj1 -> sayHi('Abir');
$humanObj2 = new Human('MIM');
$humanObj2 -> sayHi('MIM');

// echo $humanObj1->$name;