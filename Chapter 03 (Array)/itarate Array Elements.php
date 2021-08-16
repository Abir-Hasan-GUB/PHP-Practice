<?php

$normalArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$accociationArray = array(
    'a' => 'One',
    'b' => 'Two',
    'c' => 'Three',
    'd' => 'Four',
    'e' => 'Five'
);

// get regular array values
echo "========= Reguler Array ========== \n";
$Arraylength = count($normalArray);
for($i = 0; $i < $Arraylength; $i++){
    echo $normalArray[$i] . ' ,';
}

echo PHP_EOL;

// get association array values
echo "\n ========= Associative Array ========== \n";
foreach($accociationArray as $key => $value){
    echo $accociationArray[$key] . ' ,';
}

// print all association values
echo "\n ========= All Keys ========== \n";
print_r (array_keys($accociationArray));

// print all key values of association array
echo "\n ===========All values ========= \n";
print_r(array_values($accociationArray));