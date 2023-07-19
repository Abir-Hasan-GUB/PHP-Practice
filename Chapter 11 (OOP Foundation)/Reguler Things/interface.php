<?php

interface Message{
    function showMessage(); // Interface method cannot contain any body.
}

class Call implements Message {

    static $name = "Abir Hasan";

    function __construct() {
        $this->showMessage(); 
    }
    
    static function Hello(){
        // this keyword is not allowed in static function.

        echo  " Hello ". self:: $name. " from Hello Method!"; // if need to call static function/variable from static function then must use 'self' instead of 'this' keyword.
    }

    function showMessage() {
        echo "Hello world! " . self::$name . "\n";
        // echo "Hello world! " . $this->name . "\n"; // it is not possible to call static function/variable from non-static method

    }
}

$callObj = new Call();
echo $callObj instanceof Call;
echo PHP_EOL;
Call::Hello(); // call static function by class name;
echo PHP_EOL;
$callObj->Hello(); // call static function via class object.