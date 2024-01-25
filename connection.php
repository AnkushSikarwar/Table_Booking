<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'bookndine';

$con = mysqli_connect($server,$username,$password,$db);

if($con){
    ?>
    

    <script>
        alert('Welcome');
        </script>
        <?php
}else{
    die("no connection" . mysqli_connect_error());
}
?>