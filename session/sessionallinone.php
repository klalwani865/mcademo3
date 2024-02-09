<?php
session_start();

if(isset($_SESSION['admin']))
{
    unset($_SESSION['admin']);//Delete Variable
    session_destroy();//Delete all session
    echo "Session Deleted";
}
else
{
    //create
    $_SESSION['admin'] = "Karan";
    echo "Session Value is ".$_SESSION['admin'];
}
?>