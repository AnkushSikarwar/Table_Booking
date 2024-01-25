<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    //Database Connection
    $conn = new mysqli('localhost','root','','bookndine');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into contactinfo (firstname,lastname,email,subject,message) values(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $firstname, $lastname, $email, $subject, $message);
        $stmt->execute();
        header("location:index.php");
        $stmt->close();
        $conn->close();
    }
?>