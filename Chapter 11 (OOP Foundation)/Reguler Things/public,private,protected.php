<?php

class Human{
   public $name;
   private $age;
//    constractor decleration here

function __construct($name='', $age=0){
    $this->name = $name;
    $this->age = $age;
    $this->sayHi($name, $age);
}
    
    function sayHi($name, $age){
        echo "Hello ". $name.", you are {$age} years old;";
        echo PHP_EOL;
    }
}

$humanObj1 = new Human('Abir', 25);
$humanObj1 -> sayHi('Abir', 21);
$humanObj2 = new Human('MIM', 17);
$humanObj2 -> sayHi('MIM', 20);

// echo $humanObj1->$name;

echo ltrim("Test String", "T"); // remove first character from left side using ltrim function.

echo PHP_EOL;
list($fname, $lname) = ['Abir', 'Hasan'];// multiple variables declarations using list function from array.
echo "First Name: ".$fname ."\n";
echo "Last Name: ".$lname."\n";