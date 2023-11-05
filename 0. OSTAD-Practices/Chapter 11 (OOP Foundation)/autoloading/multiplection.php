<?php

class Multiplection {
    public $num1, $num2;
    function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;

        $this -> calculateMultiplection();
    }

    function calculateMultiplection() {
        echo PHP_EOL;
        echo "Total Multiplection: ". ($this->num1 * $this->num2);
    }
}

// $m1 = new Multiplection(3, 2);