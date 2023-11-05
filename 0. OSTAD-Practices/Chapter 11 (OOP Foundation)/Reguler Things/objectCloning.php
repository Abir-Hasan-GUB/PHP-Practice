<?php

class One{
    public $name;

    // function __construct($name){
    //     $this -> name = $name;
    // }

    function setName($name){
        $this -> name = $name;
    }

    function display(){
        echo ($this->name) . "\n";
    }
}

$ob1 = new One();

$ob2 = clone $ob1; // using 'clone' keyword do cloning a object. If we use only '=' sign without 'clone' then it only reffers the main object taht's why nothing will changed.

$ob1->setName('Abir');
$ob1->display();

$ob2->setName('Abir-2');
$ob2->display();
$ob1->setName('Alif');
$ob1->display();
