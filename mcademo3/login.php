<?php
session_start();
require './connect.php';

if($_POST)
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $q = mysqli_query($connection,"select * from tbl_user where user_email = '{$email}' and user_password = '{$password}'") or die(mysqli_error($connection));
    $count = mysqli_num_rows($q);
    $row = mysqli_fetch_array($q);

    if($count > 0)
    {
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['user_email'] = $row['user_email'];
        header("location:home.php");
    }
    else
    {
       echo "<script>alert('Login Fail');</script>";
    }
}

?>
<html>
    <body>
        <form method="post">

            Email : <input type="email" name ="email">
            Password : <input type="password" name="password">
            <input type="submit">
        </form>
    </body>
</html>