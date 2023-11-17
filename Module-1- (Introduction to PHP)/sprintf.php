<?php

// Sprintf returns the printed value as a string.

$name = "Abir Hasan";
$age = 23;

echo("My name is " . $name . " and age is " . $age); // here we print this value

$printName = sprintf("My name is " . $name . " and age is " . $age);
echo(PHP_EOL);
echo("Collected Print String: " . $printName);

