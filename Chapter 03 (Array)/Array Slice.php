<?php

$number = [1, 2, 3, 4, 5];
print_r(array_slice($number, 0, 2));

print_r(array_slice($number, 1, 2, true));

print_r(array_slice($number, -3, 2, true));