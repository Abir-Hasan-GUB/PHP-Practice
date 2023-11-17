<?php

$filePath = "C:\\Users\\Abir Hasan\\Desktop\\PHP-Practice\\Module-7-File\\write.txt";

if (is_writable($filePath)) {
 $fp = fopen($filePath, "a");

 $studens = [
  'a', 'b', 'c',
  'name' => "Abir Hasan",
 ];

 $jsonArrays = [
  "name" => "Abir Hasan",
  "age"  => "20 years Old",
 ];

 $serializedData = serialize($studens);
 $jsonEncode     = json_encode($jsonArrays);

 file_put_contents($filePath, $jsonEncode, FILE_APPEND | LOCK_EX);

 fclose($fp);
} else {
 echo "File is not writeable! Check permission";
}
