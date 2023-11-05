<?php

$input1 = "Hello";
$input2 = "World";

function concatTwoString($input1, $input2)
{
    $reverseFirstInput = strrev($input1); //reverse first input
    return ($reverseFirstInput . $input2);
}

$finalConcatOutPut = concatTwoString($input1, $input2);
echo $finalConcatOutPut;

// OUT-PUT:
/*
$input1 = "Hello";
$input2 = "World";

Result is: olleHWorld
 */
