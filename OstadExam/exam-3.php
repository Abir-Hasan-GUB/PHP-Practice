<?php

function testPairs($arrayEl, $sum) {
    $isPair = false;

    for($i = 0; $i < count($arrayEl); $i++) {
   echo  $arrayEl[$i + 1];
        // if($array[$i] + $array[$i + 1] == $sum) {
        //    echo $sum;
        // }
            // return false;
    }
    // return $isPair;
}

$testArray = [5, 7, 1, 2, 8, 4, 3];
$testSum = 8;

$abir = testPairs($testArray, $testSum);
echo $abir;
// echo testPairs($testArray, $testSum);