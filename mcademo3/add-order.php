<?php
session_start();
require './connect.php';
if(!isset($_SESSION['user_id']))
{
    header("location:login.php");
}

if($_POST)
{
    $order_date = date('d-m-y');
    $user_id = $_SESSION['user_id'];
    $product_name = $_POST['txt1'];
    $product_qty = $_POST['txt2'];
    $order_status = "pending";
    $q = mysqli_query($connection,"insert into tbl_order_master (order_date,user_id,product_name,product_qty,order_status) values('{$order_date}','{$user_id}','{$product_name}','{$product_qty}','{$order_status}')") or die (mysqli_error($connection));

    if($q)
    {
        echo "<script>alert('Thanks for placing order Admin will update shortly');</script>";
    }
}
?>
<html>
    <body>
    <a href='home.php'>Home</a>     
    <a href='view-order.php'>Manage Order</a>
        <form method="post">

            Product Name:<input type="text" name="txt1">
            Product Qty:<input type="text" name="txt2">

            <input type="submit">
        </form>
    </body>
</html>