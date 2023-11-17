<?php

$filePath = "C:\\Users\\Abir Hasan\\Desktop\\PHP-Practice\\Module-7-File\\text.txt";
$filePath2 = "C:\\Users\\Abir Hasan\\Desktop\\PHP-Practice\\Module-7-File\\text-2.txt";

$fp = fopen($filePath, "r");
// $line = fgets($fp); // print single line (until get new line)

while ($line = fgets($fp)) {
    echo $line;
}
echo PHP_EOL;
echo PHP_EOL;

// print file data as array per line [after getting new line]
$file = file($filePath2);
print_r($file);

// read whole file text as plane text.
$readAdPlanText = file_get_contents($filePath);
echo PHP_EOL;
echo PHP_EOL;

echo $readAdPlanText;

// check readable or not a file
echo PHP_EOL;
echo PHP_EOL;

if(is_readable($filePath)){
    echo "File is readable!";
}else{
    echo "File is not readable!";
}

fclose($fp);