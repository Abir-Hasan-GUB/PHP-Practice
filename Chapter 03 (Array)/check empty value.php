<?php
$name = "Abir Hasan";

if(isset($name)){ // it is wrong way because if variable contain empty string the it return true
    echo "Name is Set \n";
}

// right way

if(empty($name)){ // return false if variable is empty or empty string or '0' then return true.
    echo "Name is Empty \n";
    
}

if(isset($name) && !empty($name) && !is_numeric($name) && is_string($name) && $name[0] != ' '){ // wright way 
echo "Name is set & name is: " . $name;
} else {
    echo "Name is not set";
}