<?php

session_start();

echo "Hello" . $_SESSION['user_name'];

if(!isset($_SESSION['user_id']))
{
    header("location:login.php");
}

echo "<a href='add-order.php'>Place Order</a> | ";
echo "<a href='view-order.php'>Manage Order</a> | ";
echo "<a href='logout.php'>Logout</a> | ";