<?php

class DiscritCollection implements IteratorAggregate, Countable{
    private $districts;

    function __construct(){
        $this -> districts = array();
    }

    function add($district){
        array_push($this->districts,$district);
    }

    function getDistricts(){
        return $this->districts;
    }

    function getIterator(){
        return new ArrayIterator($this->districts); // return a object that treat this class as an array also itaratable.
    }

    function count(){ // make it countable by interface
        return count($this->districts); 
    }
}

$districts = new DiscritCollection();

$districts->add('Rajshahi');
$districts->add('Sylhet');
$districts->add('Dhaka');
$districts->add('Chitagang');

// $_districts = $districts->getDistricts(); // normally districts is not ittaratable. That's why we used this system.
echo "All Districts Are: ";

foreach($districts as $district){
    echo $district." ";
}

echo "\n Total Districts: ". count($districts);