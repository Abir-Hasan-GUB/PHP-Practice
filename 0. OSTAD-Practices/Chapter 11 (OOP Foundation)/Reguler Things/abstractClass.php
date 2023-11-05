<?php

abstract class PersonAbstract {
  public final function countryDisplay(){
   echo "\nCountry is: Bangladesh";
  }
    abstract function displayName($name); // abstract function doesnt contain any body of this function.
}

class Person extends PersonAbstract{
    protected $name;
    function __construct($name=''){
        $this -> name = $name;

        $this -> displayName($name);
        parent:: countryDisplay(); // call parent final function by parent keyword.
    }

    function displayName($name){
       if($name){
        echo "Your name: " . $name;
       }else{
        echo "Name is not available";
       }
    }

    // function countryDisplay(){
    //     // Final function cannot be overridden by child classes.
    // }
}

// $abstractPersonObj = new PersonAbstract(); // not possible to instantiate abstract class.
$personObj = new Person('Abir Hasan');
$personObj-> countryDisplay();