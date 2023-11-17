<?php

$filePath = "C:\\Users\\Abir Hasan\\Desktop\\PHP-Practice\\Module-7-File\\write.txt";

if (is_writable($filePath)) {
 $fp = fopen($filePath, "a");
 fwrite($fp, "This is test!");
 fclose($fp);
}else{
    echo "File is not writeable! Check permission";
}
