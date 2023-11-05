<?php

class myExecption extends Exception{
    public function errorMessage() { // 'errorMessage' is overridden method from Exception interface.
        $errorMSG = 
        // 'Error on line ' . 
        // $this->getline() . 'in '.
        // $this->getFile() . "\n Error: " . 
        $this->getMessage();
        return $errorMSG;
    }
};

$number = 0;
try{
    if($number == 0){
        throw new myExecption('Number must be greater than zero.');
    }else{
        echo "Number is valid";
    }
}catch (myExecption $e) {
    echo $e->errorMessage();
}