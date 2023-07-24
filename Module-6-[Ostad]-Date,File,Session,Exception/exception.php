<?php

class CalculateDivision{
    public $num1, $num2;

    function __construct($num1, $num2){
        $this->num1 = $num1;
        $this->num2 = $num2;

        $this->calculate($num1, $num2);
    }

    private function calculate($num1, $num2){
        try{
            if($num2 === 0){
              return throw new Exception("You can't divide by zero", 2002);
            }
              else{
                echo "Devident is: ". $num1 / $num2;
                echo PHP_EOL, "</br>";
              }
        }catch(Exception $e ){
            echo "Error: " . $e->getMessage(), "</br>Error Code: ". $e->getCode()."</br>";
        }
    }
}

$calculate = new CalculateDivision(0, 0);