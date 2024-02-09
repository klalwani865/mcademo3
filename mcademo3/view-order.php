<?php
session_start();
require './connect.php';

echo "<a href='home.php'>Home</a> | ";
echo "<a href='add-order.php'>Place Order</a> ";
$q = mysqli_query($connection, "select * from tbl_order_master where user_id ='{$_SESSION['user_id']}'") or die(mysqli_error($connection));

echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Date</th>";
echo "<th>Product</th>";
echo "<th>Qty</th>";
echo "<th>Status</th>";
echo "</tr>";

while($row = mysqli_fetch_array($q))
{
    echo "<tr>";
    echo "<td>{$row['order_id']}</td>";
    echo "<td>{$row['order_date']}</td>";
    echo "<td>{$row['product_name']}</td>";
    echo "<td>{$row['product_qty']}</td>";
    echo "<td>{$row['order_status']}</td>";
    echo "</tr>";
}
echo "</table>";
?>