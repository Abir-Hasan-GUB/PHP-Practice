<?php

date_default_timezone_set('Asia/Dhaka');

$date = date_create();
echo "Current Date: ". date_format($date, 'Y-m-d'); // get new date by date object

date_add($date, date_interval_create_from_date_string('6 days')); // add 6 days to date
echo " \nNew Date after add: ".date_format($date, 'Y-m-d'); // now replaced the current date by the new one

date_sub($date, date_interval_create_from_date_string('6 days')); // reduce 6 days to date
echo " \nNew Date after reduce: ".date_format($date, 'Y-m-d'); // now replaced the current date by the new one

// Date diffrence
$date1 = date_create('1998-08-10'); // date of birth of Abir
echo PHP_EOL;
$date2 = date_create('2023-07-24'); // date of birth of Abir

echo "Abir's Age is: ". date_diff($date1, $date2)->format(" %R %a days"); // [R- for Positive/negative sign; a- for absulote value]
echo "\n". date_sunrise(0);

// date time stamps
echo "\n". date_timestamp_get($date); // get correct unix timestamp
echo PHP_EOL;
echo 0/2;