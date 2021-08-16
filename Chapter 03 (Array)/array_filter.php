<?php
$numbers = array( 1,2,8,6,9,5,7,4,3 );

function checkEven($n){
    if( $n % 2 == 0 ){
        return true;
    } return false;
}

$crossCheck = array_filter($numbers,'checkEven');
print_r($crossCheck);