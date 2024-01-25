<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu | Book N Dine</title>
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./globalStyles.css">
    <link rel="stylesheet" href="./components.css">
    <link rel="stylesheet" href="./menu.css">
    
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
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
                        <li><a href="./menu.html" class="nav__link">Menu</a> </li>
                        <li><a href="./about.html" class="nav__link">About</a> </li>
                        <li><a href="./contact.html" class="nav__link">Contact</a></li>
                        <?php
                        $count=0;
                        if(isset($_SESSION['cart']))
                        {
                            $count=count($_SESSION['cart']);
                        }
                        ?>
                        <li><a href="./mycart.php" class="btn primary-btn">My Cart (<?php echo $count; ?>)</a> </li>
                        <li><a href="booking2.html" class="btn primary-btn">Book Table</a> </li>
                    </div>
                </ul>
            </nav>
        </div>
    </div>
    <!--End Nav Section -->
    <!--Page title-->
    <section id="page__title" data-aos="fade-up">
        <div class="container">
            <h2 class="page__title__text">
                Explore Our Menu
            </h2>
        </div>
    </section>
    <!--End Page title-->
    <!--Our special section-->
         <section id="ourSpecials" data-aos="fade-up">
            <div class="container">
                <h3 class="ourSpecials__title">Our Specials</h3>
                 <div class="ourSpecials__wrapper">
                <form action="manage_cart.php" method="Post">
                    <div class="ourSpecials__item">
                        <div class="ourSpecials__item__img">
                          <img src="./images/food-3.jpg" alt="food">
                        </div>
                        <div class="ourSpecials__item__info">
                            <h3 class="ourSpecials__item__title">
                                    French Fries
                            </h3>
                            <h4 class="ourSpecials__item__price">Rs.149 only</h4>
                            <div class="ourSpecials__item__stars">
                                <img src="./images/3star.png" alt="stars">
                                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="French Fries">
                                <input type="hidden" name="Price" value="149">
                                
                            </div>
                        </div>
                    </div>
                </form>
                    
                   <form action="manage_cart.php" method="post">
                    <div class="ourSpecials__item">
                        <div class="ourSpecials__item__img">
                            <img src="./images/salad Bowl.jpeg" alt="food">
                        </div>
                        <div class="ourSpecials__item__info">
                            <h3 class="ourSpecials__item__title">
                                    Salad Bowl
                            </h3>
                            <h4 class="ourSpecials__item__price">Rs.199 only</h4>
                            <div class="ourSpecials__item__stars">
                                <img src="./images/3star.png" alt="stars">
                                <button type="submit" name="Add_To_Cart" class="btn btn-info" >Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Salad Bowl">
                                <input type="hidden" name="Price" value="199">
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
         </section>
    <!--End Our special section-->
    <!-- Top Dishes-->
<section id="dishGrid" data-aos="fade-down">
    <div class="container">
            <h2 class="dishGrid__title">
                Top Dishes
            </h2>
            <form action="manage_cart.php" method="post">
            <div class="dishGrid__wrapper">
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./images/SN3.jpg" alt="food img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Paneer Tikka
                        </h3>
                        <h3 class="dishGrid__item__price">Rs.249 Only</h3>
                        <div class="dishGrid__item__stars">
                            <img src="./images/3star.png" alt="3 starts">
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Paneer Tikka">
                                <input type="hidden" name="Price" value="249">
                        </div>
                    </div>
                </div>
                    </form>
                    <form action="manage_cart.php" method="post">
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./images/d1.jpg" alt="food img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Western Thali
                        </h3>
                        <h3 class="dishGrid__item__price">Rs.349 Only</h3>
                        <div class="dishGrid__item__stars">
                            <img src="./images/3star.png" alt="3 starts">
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Western Thali">
                                <input type="hidden" name="Price" value="349">
                        </div>
                    </div>
                </div>
                    </form>
                    <form action="manage_cart.php" method="post">
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./images/b2.jpg" alt="food img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Fruit Bowl
                        </h3>
                        <h3 class="dishGrid__item__price">Rs.149 Only</h3>
                        <div class="dishGrid__item__stars">
                            <img src="./images/3star.png" alt="3 starts">
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Fruit Bowl">
                                <input type="hidden" name="Price" value="149">
                        </div>
                    </div>
                </div>
                    </form>
            </div>
    </div>
</section>
<!--End Top Dishes Section-->
 <!-- Breakfast Section Dishes-->
 <section id="dishGrid" data-aos="fade-up">
    <div class="container">
            <h2 class="dishGrid__title">
                Breakfast
            </h2>
            <form action="manage_cart.php" method="post">
            <div class="dishGrid__wrapper">
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./images/b1.jpg" alt="food img">
                       
                    </div>
                    
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Grill Sandwich with tea
                        </h3>
                        <h3 class="dishGrid__item__price">Rs.109 Only</h3>
                        <div class="dishGrid__item__stars">
                            <img src="./images/3star.png" alt="3 starts">
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Grill Sandwich WITH Tea">
                                <input type="hidden" name="Price" value="109">
                        </div>
                    </div>
                    
                </div>
                </form>
                <form action="manage_cart.php" method="post">
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./images/b2.jpg" alt="food img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Fruit Bowl
                        </h3>
                        <h3 class="dishGrid__item__price">Rs.149 Only</h3>
                        <div class="dishGrid__item__stars">
                            <img src="./images/3star.png" alt="3 starts">
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Fruit Bowl">
                                <input type="hidden" name="Price" value="149">

                        </div>
                    </div>
                </div>
                    </form>
                    <form action="manage_cart.php" method="post">
                <div class="dishGrid__item">
               
                    <div class="dishGrid__item__img">
                        <img src="./images/b3.jpg" alt="food img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Grilled Vegetable Roll
                        </h3>
                        <h3 class="dishGrid__item__price">Rs.99 Only</h3>
                        <div class="dishGrid__item__stars">
                            
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value=" Grilled Vegetable Roll">
                                <input type="hidden" name="Price" value="99">
                        </div>
                    </div>
                </div>
                <br><br><br>
                    </form>
                    <form action="manage_cart.php" method="post">
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./images/b4.jpg" alt="food img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Chole Bhature with Samosa
                        </h3>
                        <h3 class="dishGrid__item__price">Rs.199 Only</h3>
                        <div class="dishGrid__item__stars">
                            
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value=" Chole Bhature with Samosa">
                                <input type="hidden" name="Price" value="199">
                        </div>
                    </div>
                </div>
                    </form>
                    <form action="manage_cart.php" method="post">
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./images/b5.jpg" alt="food img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Lemon Poha
                        </h3>
                        <h3 class="dishGrid__item__price">Rs.107 Only</h3>
                        <div class="dishGrid__item__stars">
                            
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="  Lemon Poha">
                                <input type="hidden" name="Price" value="107">
                        </div>
                    </div>
                </div>
                    </form>
            </div>
    </div>
</section>
<!--End Breakfast Dishes Section-->
<!-- Lunch Section Dishes-->
<section id="dishGrid" data-aos="fade-up">
    <div class="container">
            <h2 class="dishGrid__title">
                Lunch
            </h2>
            <div class="dishGrid__wrapper">
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./images/l1.jpg" alt="food img">
                    </div>
                    <form action="manage_cart.php" method="post">
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Gujrati Thali
                        </h3>
                        <h3 class="dishGrid__item__price">Rs.249 Only</h3>
                        <div class="dishGrid__item__stars">
                            <img src="./images/3star.png" alt="3 starts">
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="  Gujrati Thali">
                                <input type="hidden" name="Price" value="249">
                        </div>
                    </div>
                    </form>
                </div>
                <form action="manage_cart.php" method="post">
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./images/l2.jpg" alt="food img">
                    </div>
                   
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Kadai Paneer + Butter Naan
                        </h3>
                        <h3 class="dishGrid__item__price">Rs.299 Only</h3>
                        <div class="dishGrid__item__stars">
                            
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="  Kadai Paneer + Butter Naan">
                                <input type="hidden" name="Price" value="299">
                        </div>
                    </div>
                    
                </div>
                </form>
                <form action="manage_cart.php" method="post">
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./images/l3.jpg" alt="food img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Rice bowl with Raita
                        </h3>
                        <h3 class="dishGrid__item__price">Rs.149 Only</h3>
                        <div class="dishGrid__item__stars">
                           
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="  Rice bowl with Raita">
                                <input type="hidden" name="Price" value="149">
                        </div>
                    </div>
                </div>
                    </form>
                    <form action="manage_cart.php" method="post">
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./images/l4.jpg" alt="food img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Kadai Paneer
                        </h3>
                        <h3 class="dishGrid__item__price">Rs.199 Only</h3>
                        <div class="dishGrid__item__stars">
                           
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value=" Kadai Paneer">
                                <input type="hidden" name="Price" value="199">
                        </div>
                    </div>
                </div>
                    </form>
                    
                    <form action="manage_cart.php" method="post">
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./images/l5.jpg" alt="food img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Dal Makhni
                        </h3>
                        <h3 class="dishGrid__item__price">Rs.149 Only</h3>
                        <div class="dishGrid__item__stars">
                            
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Dal Makhni">
                                <input type="hidden" name="Price" value="149">
                        </div>
                    </div>
                </div>
                    </form>
            </div>
    </div>
</section>
<!--End Lunch Dishes Section-->
<!-- Dinner Section Dishes-->
<section id="dishGrid" data-aos="fade-up">
    <div class="container">
            <h2 class="dishGrid__title">
                Dinner
            </h2>
            <div class="dishGrid__wrapper">
                <form action="manage_cart.php" method="post">
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./images/d1.jpg" alt="food img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Western Thali
                        </h3>
                        <h3 class="dishGrid__item__price">Rs.349 Only</h3>
                        <div class="dishGrid__item__stars">
                            <img src="./images/3star.png" alt="3 starts">
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Western Thali">
                                <input type="hidden" name="Price" value="349">
                        </div>
                    </div>
                </div>
                    </form>
                    <form action="manage_cart.php" method="post">
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./images/d2.jpg" alt="food img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Rice Bowl
                        </h3>
                        <h3 class="dishGrid__item__price">Rs.99 Only</h3>
                        <div class="dishGrid__item__stars">
                            
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Rice Bowl">
                                <input type="hidden" name="Price" value="99">
                        </div>
                    </div>
                </div>
                    </form>
                    <form action="manage_cart.php" method="post">
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./images/d3.jpg" alt="food img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Rajasthani Thali
                        </h3>
                        <h3 class="dishGrid__item__price">Rs.399 Only</h3>
                        <div class="dishGrid__item__stars">
                          
                               
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value=" Rajasthani Thali">
                                <input type="hidden" name="Price" value="399">
                        </div>
                    </div>
                </div>
                    </form>
                    <form action="manage_cart.php" method="post">
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./images/d4.jpg" alt="food img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Delhi Special
                        </h3>
                        <h3 class="dishGrid__item__price">Rs.199 Only</h3>
                        <div class="dishGrid__item__stars">
                            
                               
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Delhi Special">
                                <input type="hidden" name="Price" value="199">
                        </div>
                    </div>
                </div>
                    </form>
                    <form action="manage_cart.php" method="post">
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./images/d5.jpg" alt="food img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Lachha paratha
                        </h3>
                        <h3 class="dishGrid__item__price">Rs.249 Only</h3>
                        <div class="dishGrid__item__stars">
                           
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Lachha paratha">
                                <input type="hidden" name="Price" value="249">
                        </div>
                    </div>
                </div>
                    </form>
            </div>
    </div>
</section>
<!--End Dinner Dishes Section-->



    <!--Footer-->
    <footer>
        <div class="container">
            <div class="footer__wrapper">
                <div class="footer__col1">
                    <div class="footer__logo">
                        <img src="./images/3333.png" alt="Book'n Dine">  
                    </div>
                    <p class="footer__desc">
                        Fresh and delicious traditional 
                        Indian food to delight the 
                        whole family
                    </p>
                    <div class="footer__socials">
                        <h4 class="footer__socials__title">Follow us</h4>
                        <ol>
                            <li>
                                <a href="#">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        >
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                     </svg>  
                                </a>
                            </li>
                            <li>
                                <a href="#">
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
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                                  </svg>
                                </a> 
                            </li>
                            <li>
                                <a href="#">
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
                                    <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                                  </svg>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="footer__col2">
                    <h3 class="footer__text__title">
                        Links
                    </h3>
                    <ol class="footer__text">
                        <li>
                            <a href="./index.html">Home</a>
                        </li>
                        <li>
                            <a href="./menu.html">Menu</a>
                        </li>
                        <li>
                            <a href="booking2.html">Book Table</a>
                        </li>
                        <li>
                            <a href="./about.html">About Us</a>
                        </li>
                        <li>
                            <a href="./contact.html">Contact</a>
                        </li>
                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>
                    </ol>
                </div>
                <div class="footer__col3">
                    <h3 class="footer__text__title">
                        Support
                    </h3>
                    <ol class="footer__text">
                        <li>
                            <a href="./contact.html">Contact</a>
                        </li>
                        <li>
                            <a href="#">Support Center</a>
                        </li>
                        <li>
                            <a href="#">Feedback</a>
                        </li>
                    </ol>
                </div>
                <div class="footer__col4">
                    <h3 class="footer__text__title">
                        Contact
                    </h3>
                    <ol class="footer__text">
                        <li>
                            <a href="tel:+917417545740">+919893921749</a>
                        </li>
                        <li>
                            <a href="mailto:mca22.himanshuporwal@bvicam.in">mca22.ankushsinghsikarwar@bvicam.in</a>
                        </li>
                        <li>
                            <a href="#">GEC Circle, Delhi, Mumbai, Banglore, Chennai </a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </footer>
   
    <!--End Footer-->

   
    <!-- AOS script-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- custom script-->
    <script src="./main.js"></script>
    
</body>
</html>