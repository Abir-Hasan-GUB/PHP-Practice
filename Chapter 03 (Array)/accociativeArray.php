<?php

$arrayElements = array(
    'a' => 'One',
    'b' => 'Two',
    'c' => 'Three',
    'd' => 'Four'
);

echo var_dump($arrayElements);

echo PHP_EOL;

print_r($arrayElements);
echo PHP_EOL;

echo "First element: {$arrayElements['a']}";