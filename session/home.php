<?php
session_start();

if(!isset($_SESSION['user']))
{
    header("location:login.php");
}

echo "Hii, ".$_SESSION['user'];

echo "<a href='logout.php'>Logout</a>";
?>