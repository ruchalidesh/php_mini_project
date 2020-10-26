<?php

include 'conn2.php';

$order_id = $_GET['order_id'];

$q= "delete from createorders where order_id = $order_id ";
mysqli_query($con,$q);

header('location:showorders.php');

?>