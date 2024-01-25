<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Your existing navbar code remains the same -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Book N Dine</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="menu.php">Menu <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a href="./booking2.html" class="btn ">Book Table</a> </li>
        <li class="nav-item active">
        <a href="./login.html" class="btn ">Login</a> </li>
    </ul>
    <div>
        <?php
        $count=0;
        if(isset($_SESSION['cart']))
        {
            $count=count($_SESSION['cart']);
        }
        ?>
         <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a href="mycart.php" class="btn btn-outline-success ">My Cart (<?php echo $count; ?>) </a>
        </li>
       
  </div>
</nav>
</nav>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center border rounded bg-light my-5">
            <h1>MY CART</h1>
        </div>
        <div class="col-lg-9">
            <table class="table">
                <thead class="text-center">
                    <tr>
                        <th scope="col">Serial No.</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Item Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    $total = 0;
                    if (isset($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $key => $value) {
                            $sr = $key + 1;
                            $total += $value['Price'] * $value['Quantity'];
                            echo "
                            <tr>
                                <td>$sr</td>
                                <td>$value[Item_Name]</td>
                                <td>$value[Price]</td>
                                <td>
                                    <form action='manage_cart.php' method='POST'>
                                        <input type='number' class='text-center' name='Quantity' value='$value[Quantity]' min='1' max='10' onchange='updateQuantityAndTotal(this)'>
                                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                    </form>
                                </td>
                                <td>
                                    <form action='manage_cart.php' method='POST'>
                                        <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>Remove</button>
                                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                    </form>
                                </td>
                            </tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-3">
    <div class="border bg-light rounded p-4">
        <h4>Total:</h4>
        <h5 class="text-right" id="total-price"><?php echo $total ?></h5><br>

        <!-- Updated "Order Now" form -->
        <form action="manage_cart.php" method="post">
            <!-- Add input fields for email or mobile number -->
            <div class="form-group">
                <label for="emailMobile">Email or Mobile Number:</label>
                <input type="text" class="form-control" id="emailMobile" name="emailMobile" required>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Cash On Delivery
                </label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-block" name="Order_Now">Order Now</button>
        </form>
    </div>
</div>
    </div>
</div>

<script>
        // Function to update the quantity and total price when quantity changes
        function updateQuantityAndTotal(element) {
            const formElement = element.closest('form');
            formElement.submit();
        }
    </script>

</body>
</html>
