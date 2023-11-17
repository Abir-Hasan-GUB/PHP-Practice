<?php

function handleCheckReturen($inputName, $value) {
    if(isset($_POST[$inputName]) && is_array($_POST[$inputName]) && in_array($value, $_POST[$inputName])) {
        echo ' checked ';
    }
}

$elementArray = ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten'];

function createSelectElement($elementArray){
    foreach($elementArray as $selectElement) {
        $upperCase = ucwords($selectElement);
        echo "<option> $upperCase</option>";
    }
}

function joinElement($elementArray){
    if(is_array($elementArray)){
        $joinedArray = join(', ', $elementArray);
        echo $joinedArray;
    }
}

