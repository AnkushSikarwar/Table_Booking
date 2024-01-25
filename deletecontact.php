<?php

include 'connection.php';

$id = $_GET['id'];
$deletequery = "delete from contactinfo where id=$id";
$query = mysqli_query($con,$deletequery);


header('location:displaycontact.php');

?>
