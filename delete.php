<?php

include 'connection.php';

$id = $_GET['id'];
$deletequery = "delete from booktable where id=$id";
$query = mysqli_query($con,$deletequery);


header('location:display.php');

?>
