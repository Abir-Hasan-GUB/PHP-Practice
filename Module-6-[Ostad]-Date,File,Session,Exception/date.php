<?php

date_default_timezone_set('Asia/Dhaka');

$myDate = date('Y-m-d H:i:s:a');
echo $myDate;
echo PHP_EOL;
$datefarmat1 = date('D : M : Y');
$datefarmat2 = date('d : m : y');
$datefarmat3 = date('d : m : y =>= H =>= i =>= s A');
echo $datefarmat1;
echo PHP_EOL;
echo $datefarmat2;
echo PHP_EOL;
echo $datefarmat3;
echo PHP_EOL;
echo date_default_timezone_get();