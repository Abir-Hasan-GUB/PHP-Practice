<?php
$num = array(1, 2, 3, 4, 5); // test array

$max = $num[0];

$secondMaxNumber;
for($i=1; $i<count($num); $i++){
	if($num[$i]>$max){
		$secondMaxNumber = $max;
		$max = $num[$i];
	}else if($secondMaxNumber<$num[$i] && $secondMaxNumber < $max){
		$secondMaxNumber = $num[$i];
	}
}
echo "Second Largest Number is => ". $secondMaxNumber;
?>