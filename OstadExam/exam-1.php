<?php

$num = 70;

echo $num % 10;

if($num%10 >= 6 ){
    echo "First Division";
} elseif($num%10 >= 4.5 && $num%10 <= 5.9){
    echo "Second  Division";
}elseif($num%10 >= 3.3 && $num%10 <= 4.4){
    echo "Third   Division";
} else{
    echo "Faill";
}
?>