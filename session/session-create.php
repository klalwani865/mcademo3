<?php
session_start();
 
//Variable
$_SESSION['admin'] = 'Karan';
$_SESSION['user'] = 'KaranLalwani';

//print session value
echo $_SESSION['admin'];

print_r($_SESSION);
?>