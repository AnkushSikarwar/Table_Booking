<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $tableType = $_POST['tableType'];
    $guestNumber = $_POST['guestNumber'];
    $placement = $_POST['placement'];
    $date = $_POST['date'];
    $arrivaltime = $_POST['arrivaltime'];
    $departuretime = $_POST['departuretime'];
    $mobilenumber = $_POST['mobilenumber'];
    $note = $_POST['note'];

    //Database connection
    $conn = new mysqli('localhost','root','','bookndine');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into booktable(firstName,lastName,email,tableType,guestNumber,placement,date,arrivaltime,departuretime,mobilenumber,note) values (?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssissssis",$firstName,$lastName,$email,$tableType,$guestNumber,$placement,$date,$arrivaltime,$departuretime,$mobilenumber,$note);
        $stmt->execute();
        header('location:displaylogin.php');
        $stmt->close();
        $conn->close();
    }
?>