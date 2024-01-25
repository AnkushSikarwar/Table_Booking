<?php
session_start();


?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="./globalStyles.css">
        <link rel="stylesheet" href="./reset.css">
        <link rel="stylesheet" href="./components.css">
        <link rel="stylesheet" href="./menu.css"> 
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./home.css">
        <style>
table, th, td {
  border: 3px solid black;
  border-style: solid;
  border-collapse: collapse;
  
}
th, td {
  background-color: white;
  column-gap: 20px;

}

</style>
</head>
<body >
     <!-- Navigation Section-->
     <div class="nav">
    <div class="container">
        <div class ="nav__wrapper">
            <a href="./index.html" class="logo">
                <img src="./images/3333.png" alt="Book'n Dine">  
            </a>
            <nav>
                <div class="nav__icon">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                   width="24"
                   height="24"
                   viewBox="0 0 24 24"
                   fill="none"
                   stroke="currentColor"
                   stroke-width="2"
                   stroke-linecap="round"
                   stroke-linejoin="round"
                   >
                        <line x1="3" y1="12" x2="21" y2="12" />
                        <line x1="3" y1="6" x2="21" y2="6" />
                        <line x1="3" y1="18" x2="21" y2="18" />
                        </svg>
                </div>
                <div class="nav__bgOverlay"></div>
                <ul class="nav__list">
                    <div class="nav__close">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        >
                        <line x1="18" y1="6" x2="6" y2="18" />
                        <line x1="6" y1="6" x2="18" y2="18" />
                        </svg>
                    </div>
                    <div class="nav__list__wrapper">
                        <li><a href="./index.php" class="nav__link">Home</a> </li> 
                        <li><a href="./booking2.html" class="btn primary-btn">Book Table</a> </li>
                        <li><a href="./logout.php" class="btn primary-btn">LogOut</a> </li>
                    </div>
                </ul>
            </nav>
        </div>
    </div>
    <!--End Nav Section -->
    <div class="main-div">
       <center> <h1> </h1>
       
        <div class="container">
            <h2 class="page__title__text">
                <br>
            My Ordered Meals  in BOOKNDINE
            <br><br>
            </h2>
        </div>
    
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th> Id </th>
                            <th> Email Or Mobile </th>
                            <th> Item Name </th>
                            <th> Item Price </th>
                            <th> Quantity </th>
                            
                           
                        </tr>
                    </thead>

                    <tbody>

                         <?php

                        include 'connection.php';
                        
                     // $_SESSION['email'] = $email_pass['email'];
                       
                       
                        $selectquery = " select * from orders " ;

                        $query = mysqli_query($con,$selectquery);

                        $nums = mysqli_num_rows($query);
                    
                        while($res = mysqli_fetch_assoc($query))
                        {
                        ?>  

                        <tr>
                        <td><?php echo $res['id']; ?></td>
                        <td><?php echo $res['email_mobile']; ?></td>
                        <td><?php echo $res['item_name']; ?></td>
                        <td><?php echo $res['item_price']; ?></td>
                        <td><?php echo $res['quantity']; ?></td>
                       
                       
                    </tr>
                    <?php
                        }
                   
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </center>
    <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>