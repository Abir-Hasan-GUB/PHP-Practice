<?php

class One{
   static function echoName(){
        echo static::getName(); // used 'statc::' instead of 'self::' because 'self' called parent class method. For child classes methods calling used 'statc::' instead of 'self::
    }

    static function getName(){
        return "This is class One\n";
    }
}

class Two extends One{
   static function getName(){
        echo "This is class Two\n";
    }
}

One::echoName();
Two::echoName();