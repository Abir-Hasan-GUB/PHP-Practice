<?php

class User {
    public $username, $password;

    function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;

        $this -> display($username, $password);
    }

    function display($username, $password) {
        echo "Your Username: " . $username . " & Password is: " . $password;
    }

    function __toString() { // if someone tries to print object of this class then call dis method.
        return "\n This is User Class";
    }
}

$u1 = new User('abir2247', '*******');
echo $u1; // tring to print object of an class. 
