<?php

class One{
    function getName() {
        echo "This is Class One";
    }

    function __call($arg1, $arg2) {
        echo "Your called normal method not exist in this class";
    }

    static function __callStatic($arg1, $arg2) {
        echo "Your called static method not exist in this class";
    }
}


class Two extends One{

    function parentGetName() { // call parent override method
        parent::getName();
    }

    function getName() {
        echo "This is Class Two";
    }
}

$one = new One();
$two = new Two();

$one -> getName();
echo PHP_EOL;
$two -> getName();
$two -> abir();
One::abir();