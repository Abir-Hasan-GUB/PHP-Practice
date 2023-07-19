<?php

class Human{
    private $name, $age;
    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;

        $this -> displayNameAndAge($name, $age);
    }

    function displayNameAndAge($name, $age){
        echo "Name from Parent: " . $name. " ->" . " Age from Parent: " . $age;
    }
}

class HumanDescriptions extends Human{
    public $gender, $nationality, $name, $age;
    function __construct($gender, $nationality, $name, $age){
        $this->gender = $gender;
        $this ->nationality = $nationality;
        $this ->name = $name;
        $this ->age = $age;
        
        // $this -> displayGenderAndNationality($gender, $nationality);
        $this ->displayNameAndAge($this->name, $this->age);
        echo PHP_EOL;
        parent::displayNameAndAge($this->name, $this->age); //call parent function which is overridden by child;
    }

    // function displayGenderAndNationality($gender, $nationality) {
    //     echo PHP_EOL;
    //     echo "Gender: " . $gender . " ->" . " nationality: " . $nationality;
    // }
    function displayNameAndAge($name, $age){
        echo "Name from Child: " . $name. " ->" . " Age from Child: " . $age;
        echo PHP_EOL;
    }
}

// $humanObject = new Human('Abir', 25);
$humaanDesObject = new HumanDescriptions('Male', 'Bangladeshi', 'Abir Hasan', 25);
// $humaanDesObject-> displayNameAndAge('Mimedia', 17);
// $humanObject-> displayNameAndAge('Mimedia-2', 17);
