<?php

$testString = "My name is Abir";

function isStringValid($testString)
{

    $isValid = false;

    $length = strlen($testString);

    for ($i = 0; $i < $length; $i++) {
        $ASCIIofSingleChar = ord($testString[$i]);
        if (($ASCIIofSingleChar >= 97 && $ASCIIofSingleChar <= 122) || ($ASCIIofSingleChar >= 65 && $ASCIIofSingleChar <= 90) || $ASCIIofSingleChar == 32) {
            $isValid = true;
        } else {
            $isValid = false;
        }
    }

    if ($isValid) {
        echo "VALID STRING: => this string contains only letters and whitespace";
    } else {
        echo "INVALID STRING: => this string not contains only letters and whitespace";
    }

}

$checkString = isStringValid($testString);
echo $checkString;

// OUT-PUT:
/*
VALID STRING: => this string contains only letters and whitespace
)
 */
