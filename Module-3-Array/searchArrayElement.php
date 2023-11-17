<?php
$numbers = array('1',2,8,6,9,5,7,4,3);

if(in_array(1, $numbers, true)){
    echo "Found Element";
} else {
    echo "Not Found Element";
}