<?php
session_start();

if($_POST)
{
    $name = $_POST['txt1'];
    $_SESSION['user'] = $name;
    header("location:home.php");
}

?>
<html>
    <body>
        <form method="post">
            Name:<input type="text" name="txt1">
            <input type="submit">
        </form>
    </body>
</html>