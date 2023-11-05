<?php

class Sum {
    public $num1, $num2;
    function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;

        $this -> calculateSum();
    }

    function calculateSum() {
        echo "Total summation: ". ($this->num1 + $this->num2);
    }
}

// $s1 = new Sum(1, 2);