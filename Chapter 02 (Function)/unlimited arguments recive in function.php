<?php

function sum (...$numbers) {

    $_sum = 0;
    foreach ($numbers as $n){
        $_sum += $n;
    }
    return $_sum;
}

echo "Sum is: ".sum(1,2,3,4);

