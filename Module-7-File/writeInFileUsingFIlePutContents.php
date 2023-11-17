<?php

$filePath = "C:\\Users\\Abir Hasan\\Desktop\\PHP-Practice\\Module-7-File\\write.txt";

if (is_writable($filePath)) {
 $fp = fopen($filePath, "a");
 file_put_contents($filePath, "Abir Hasan ", FILE_APPEND | LOCK_EX);
//  FILE_APPEND : Reserved previous data
//  LOCK_EX : Serialized multiple insertion
 fclose($fp);
}else{
    echo "File is not writeable! Check permission";
}
