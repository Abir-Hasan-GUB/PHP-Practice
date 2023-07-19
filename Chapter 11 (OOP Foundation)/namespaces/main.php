<?php

include 'cow.php';
include 'hen.php';
include 'man.php';


$cow1 = new Animal\Cow();
$cow1-> getName();

echo PHP_EOL;

$hen1 = new Bird\Hen();
$hen1-> getName();

use People\Persons\Person\Man as Man;

// $man1 = new People\Persons\Person\Man();
$man1 = new Man();
$man1 -> getName();