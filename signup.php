<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

 //Database connection
 $conn = new mysqli('localhost','root','','bookndine');
 if($conn->connect_error){

     die('Connection Failed : '.$conn->connect_error);
     
     }
 else{
    $stmt = $conn->prepare("insert into signup(name,email,password,confirmpassword) values (?,?,?,?)");
    $stmt->bind_param("ssss",$name,$email,$password,$confirmpassword);
    $stmt->execute();
    ?>
     <script>
        alert('Registration Successfully');
        
    </script>
    <?php
   header("location:login.html");
    $stmt->close();
    $conn->close();
    
 }
 ?>