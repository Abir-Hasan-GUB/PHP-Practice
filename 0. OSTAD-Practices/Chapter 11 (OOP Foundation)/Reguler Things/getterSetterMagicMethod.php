<?php
class User{

    private $name;
    private $age;
    private $gender;

    function __construct($name, $age, $gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function __get($props){
        return $this->$props;
    }

    public function __set($props, $value){
         $this->$props = $value;
    }

    function getName (){
        return $this->name;
    }

}

$userObj = new User('Abir', 25, 'Male');

echo $userObj->name . "\n";
$userObj->name = "New Name";
echo $userObj->name;
