<?php
session_start();

if (isset($_POST['Order_Now'])) 
{
        // Retrieve the user's email or mobile number from the form submission
        $emailMobile = $_POST['emailMobile'];

        // Insert the cart items into the database with email/mobile as the primary key
        if (isset($_SESSION['cart'])) 
        {
            // Replace 'your_db_hostname', 'your_db_username', 'your_db_password', and 'your_db_name' with actual values.
            $conn = new mysqli('localhost', "root", "", 'bookndine');
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }

            foreach ($_SESSION['cart'] as $item) 
            {
                $itemName = $item['Item_Name'];
                $itemPrice = $item['Price'];
                $quantity = $item['Quantity'];

                $stmt = $conn->prepare("INSERT INTO orders (email_mobile, item_name, item_price, quantity) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("ssdi", $emailMobile, $itemName, $itemPrice, $quantity);
                $stmt->execute();
                $stmt->close();
            }

            $conn->close();
        }

        // Clear the cart after successful order
        $_SESSION['cart'] = array();

        // Redirect back to the cart page after the order is placed
        echo "<script>
                alert('Your Order is Placed Please Login ');
                window.location.href='displayfood.php';
                </script>";
}




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Add_To_Cart'])) {
        if (isset($_SESSION['cart'])) {
            $myitems = array_column($_SESSION['cart'], 'Item_Name');
            if (in_array($_POST['Item_Name'], $myitems)) {
                echo "<script>
                alert('Item Already Added');
                window.location.href='menu.php';
                </script>";
            } else {
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array('Item_Name' => $_POST['Item_Name'], 'Price' => $_POST['Price'], 'Quantity' => 1);
                echo "<script>
                alert('Item Added Successfully');
                window.location.href='menu.php';
                </script>";
            }
        } else {
            $_SESSION['cart'][0] = array('Item_Name' => $_POST['Item_Name'], 'Price' => $_POST['Price'], 'Quantity' => 1);
            echo "<script>
            alert('Item Added');
            window.location.href='menu.php';
            </script>";
        }
    }

    if (isset($_POST['Remove_Item'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['Item_Name'] == $_POST['Item_Name']) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                echo "<script>
                alert('Item Removed');
                window.location.href='mycart.php';
                </script>";
            }
        }
    }

    if (isset($_POST['Quantity'])) {
        $newQuantity = (int)$_POST['Quantity'];
        $itemName = $_POST['Item_Name'];

        // Update the quantity for the selected item in the cart
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['Item_Name'] == $itemName) {
                $_SESSION['cart'][$key]['Quantity'] = $newQuantity;
                break;
            }
        }

        // Redirect back to the cart page after updating the quantity
        header("Location: mycart.php");
    }
}
?>