<?php
// manually import files here
// include 'sum.php';
// include 'multiplection.php';

function autoload($name){ // all files imported here are automatically
    include "{$name}.php";
}

spl_autoload_register('autoload');


(new Sum(3, 5)); // create a new Sum object
(new Multiplection(3, 5)); // create a new Sum object