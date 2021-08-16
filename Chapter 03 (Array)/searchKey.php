<?php
$numbers = array(
    '1' => 'One',
    '2' => 'Two',
    '3' => 'Three',
    '4' => 'Four',
    '5' => 'Five'
);

echo key_exists('2', $numbers) . "\n"; // return key index if exist

if(key_exists('2', $numbers)){
    echo 'Key is Exist...';
} else {
    echo 'Key is not Exist...';
}