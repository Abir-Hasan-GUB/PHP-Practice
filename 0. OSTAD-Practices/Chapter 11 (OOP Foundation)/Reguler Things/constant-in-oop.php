<?php

class User{
    const name = "Abir Hasan";

    function display () {
        echo "This is display method of User \n";
        echo self::name ." \n"; // we can only used 'self::' keryword for calling constants, not this or anything else...
    }
}

$userObj = new User();
// echo $userObj::display();
$userObj->display();
echo $userObj::name; // we also can use '::' to call constants like static methods by class name, just here used object to call. 
