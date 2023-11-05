<?php

session_start();
$_session['userName'] = 'abir@gmail.com';
$_session['password'] = 'password';
// sleep(2); // stop execution for a few seconds
echo $_session['userName'];
session_destroy();



// print_r ($_COOKIE);