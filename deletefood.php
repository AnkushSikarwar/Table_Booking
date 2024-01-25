<?php

include 'connection.php';

$id = $_GET['id'];
$deletequery = "delete from orders where id=$id";
$query = mysqli_query($con,$deletequery);


header('location:displayfoodadmin.php');

?>
