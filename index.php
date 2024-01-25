<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Book N Dine</title>
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./globalStyles.css">
    <link rel="stylesheet" href="./components.css">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./home.css">
    
</head>
<body>
    <!-- Navigation Section-->
    <div class="nav">
    <div class="container">
        <div class ="nav__wrapper">
            <a href="./index.php" class="logo">
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
                        <li><a href="./menu.php" class="nav__link">Menu</a> </li>
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
                        <li><a href="./login.html" class="btn primary-btn">Login</a> </li>
                    </div>
                </ul>
            </nav>
        </div>
    </div>
    <!--End Nav Section -->
    <!--Hero Section-->
    <section id="hero">
        <div class="container">
            <div class="hero__wrapper">
                <div class="hero__left " data-aos="fade-left" >
                    <div class="hero__left__wrapper">
                        <h1 class="hero__heading">The flavor of tradition</h1>
                        <p class="hero__info">We are a multi-cuision restaurant
                            offering a wide variety of food experience in both
                            casual and fine dining environment
                        </p>
                    <div class="button__wrapper">
                        <a href="menu.php" class="btn primary-btn">Explore Menu</a>
                        <a href="booking2.html" class="btn">Book Table</a>
                    </div>
                    </div>
                </div>
                <div class="hero__right" data-aos="fade-right">
                    <div class="hero__imgWrapper">
                        <a href="booking2.html">
                        <img src="./images/4444.png" alt="food img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Hero Section-->
    <!-- Store Info Section-->
    <section id="storeInfo" data-aos="fade-up">
        <a href="contact.html">
        <div class="container">
            <div class="storeInfo__wrapper">
                <div class="storeInfo__item">
                    <div class="storeInfo__icon">
                        <img src="./images/wall-clock-icon.svg" alt="icon">
                    </div>
                    <h3 class="storeInfo__title">
                        10 AM - 7PM
                    </h3>
                    <p class="storeInfo__text">
                        Opening Hour
                    </p>
                </div>
            </a>
                <a href="contact.html">
                <div class="storeInfo__item">
                     <div class="storeInfo__icon">
                        <img src="./images/address-icon.svg" alt="icon">
                    </div>
                    <h3 class="storeInfo__title">
                        GEC Circle Delhi
                    </h3>
                    <p class="storeInfo__text">
                        Address
                    </p>
                </div>
                </a>
                <a href="contact.html">
                <div class="storeInfo__item">
                    <div class="storeInfo__icon">
                        <img src="./images/phone-icon.svg" alt="icon">
                    </div>
                    <h3 class="storeInfo__title">
                       +917417545740
                    </h3>
                    <p class="storeInfo__text">
                        Call Now
                    </p>
                </div>
                </a>
            </div>
        </div>
    </section>
    <!-- End Store Info Section-->
    <!--Our Specials Section-->
    <section id="ourSpecials" data-aos="fade-up">
        <div class="container">
            <div class="ourSpecials__wrapper">
                <div class="ourSpecials__left">
                    <div class="ourSpecials__item">
                        <div class="ourSpecials__item__img">
                            <img src="./images/5555.jpg" alt="food img">
                        </div>
                        <h2 class="ourSpecials__item__title">Cheese Burger</h2>
                        <h3 class="ourSpecial__item__price">Rs.199 Only</h3>
                        <div class="ourSpecials__item__stars">
                            <img src="./images/3star.png" alt="3stars">
                        </div>
                        <p class="ourSpecials__item__text">
                            Double the crispy Patties and double the 
                            Cheese! With crispy Veg Patty enveloped in
                            melted Cheese, fresh Iceberg Lettuce, 
                            Capsicum, Onions, Tomatos in our delicious
                            dressing sauce, cushioned between soft 
                            buttered buns.
                        </p>
                    </div>
                    <div class="ourSpecials__item">
                        <div class="ourSpecials__item__img">
                            <img src="./images/6666.jpg" alt="food img">
                        </div>
                        <h2 class="ourSpecials__item__title">Paneer Momos</h2>
                        <h3 class="ourSpecial__item__price">Rs.249 Only</h3>
                       <div class="ourSpecials__item__stars">
                            <img src="./images/3star.png" alt="3stars">
                        </div>
                        <p class="ourSpecials__item__text">
                            Momos are a popular street food in northern parts of India. 
                            These are also known as Dim Sum and are basically dumplings 
                            made from flour with a savory stuffing. Learn to make these 
                            popular Tibetan recipe of easy veg momos from scratch with 
                            two folding techniques. The momos recipe is also vegan.
                        </p>
                    </div>
                </div>
                <div class="ourSpecials__right">
                    <h2 class="ourSpecials__title">Our Specials</h2>
                    <p class="ourSpecials__text">
                        All of our food is prepared daily at our restaurants
                        to ensure the highest quality,freshest meals are 
                        delivered to our customers.
                    </p>
                    <a href="./booking2.html" class="btn primary-btn">Book Table</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Specials Section-->
<!-- Top Dishes-->
<section id="dishGrid" data-aos="fade-up">
    <div class="container">
            <h2 class="dishGrid__title">
                Top Dishes
            </h2>
            <form action="manage_cart.php" method="post">
            <a href="booking2.html">
            <div class="dishGrid__wrapper">
               
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./images/SN1.jpg" alt="food img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Paneer Dosa
                        </h3>
                        <h3 class="dishGrid__item__price">Rs.199 Only</h3>
                        <div class="dishGrid__item__stars">
                           
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Paneer Dosa">
                                <input type="hidden" name="Price" value="199">
                        </div>
                    </div>
                </div>
                
            </a>
            <form>
                <form action="manage_cart.php" method="post">
            <a href="booking2.html">
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./images/SN2.jpg" alt="food img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Double Cheese Pizza
                        </h3>
                        <h3 class="dishGrid__item__price">Rs.249 Only</h3>
                        <div class="dishGrid__item__stars">
                            
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Double Cheese Pizza">
                                <input type="hidden" name="Price" value="249">
                        </div>
                    </div>
                </div>
                </a>
            </form>
            <form action="manage_cart.php" method="post">
                <a href="booking2.html">
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./images/SN3.jpg" alt="food img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Panner Tikka
                        </h3>
                        <h3 class="dishGrid__item__price">Rs.209 Only</h3>
                        <div class="dishGrid__item__stars">
                           
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Panner Tikka">
                                <input type="hidden" name="Price" value="209">
                        </div>
                    </div>
                </div>
                </a>
            </form>
            </div>
    </div>
    <form>
</section>
<!--End Top Dishes Section-->
<!--Discount Section-->
    <section id="discount" data-aos="fade-up">
        <div class="container">
            <div class="discount__wrapper">
                <div class="discount__images">
                    <div class="discount__img1">
                        <img src="./images/s1.jpeg" alt="food img">
                    </div>
                    <div class="discount__img2">
                        <img src="./images/s2.jpg" alt="food img">
                    </div> <div class="discount__img3">
                        <img src="./images/s3.jpg" alt="food img">
                    </div>
                </div>
                <div class="discount__info">
                    <h3 class="discount__text">35% OFF </h3>
                    <h3 class="discount__title">Demo dish for discount </h3>
                    <h3 class="discount__price">
                        <span class="discount__oldPrice">Rs.299</span>
                        <span class="discount__newPrice">Rs.199</span>
                    </h3>
                    <div class="discount__stars">
                        <img src="./images/3star.png" alt="3 stars">
                    </div>
                    <a href="./booking2.html" class="btn primary-btn">Book Table</a>
                </div>
            </div>
        </div>
    </section>
<!-- End Discount Section-->
<!--Events media Section-->
<section id="eventsMedia" data-aos="fade-up">
    <div class="container">
        <div class="eventsMedia__wrapper">
            <div class="eventsMedia__1">
                <img src="./images/eventsmedia1.png" alt="events">
                <a href="#" class="eventsMedia__1__playButton">
                    <img src="./images/playIcon.svg" alt="play button">
                </a>
            </div>
            <div class="eventsMedia__2">
                <img src="./images/eventsMedia2.png" alt="events"
            </div>
        </div>
    </div>
</section>
<!--End Events media Section-->
<!--Events info Section-->
<section id="eventsInfo" data-aos="fade-up">
    <div class="container">
        <div class="eventsInfo__wrapper">
            <div class="eventsInfo__left">
                <div class="eventsInfo__item">
                    <div class="eventsInfo__item__img">
                        <img src="./images/e1.jpg" alt="events">
                    </div>
                    <div class="eventsInfo__item__info">
                        <h2 class="eventsInfo__item__title">Corporate Events</h2>
                        <p class="eventsInfo__item__text">
                            Book N Dine is the perfect venue for your
                            corporate events. we specialize in private
                            parties.
                        </p>
                    </div>
                </div>
                <div class="eventsInfo__item">
                    <div class="eventsInfo__item__img">
                        <img src="./images/e2.jpg" alt="events">
                    </div>
                    <div class="eventsInfo__item__info">
                        <h2 class="eventsInfo__item__title">Wedding </h2>
                        <p class="eventsInfo__item__text">
                            Book N Dine offers an intimately unique wedding 
                            experience set in a spectacular setting that is 
                            sophisticated and comfortable.
                        </p>
                    </div>
                </div>
            </div>
            <div class="eventsInfo__right">
                <h2 class="eventsInfo__title">
                    Book for Events
                </h2>
                <p class="eventsInfo__text">
                    Book your private events or corporate function at 
                    Book N Dine to experience a truly unique experience.
                </p>
                <a href="./contact.html" class="btn primary-btn">Contact Now</a>
            </div>
        </div>
    </div>
</section>
<!--End Events info Section-->
<!--why us Section-->
    <section id="whyUs" >
        <div class="container">
            <div class="whyUs__wrapper">
                <div class="whyUs__left" data-aos="fade-right">
                    <h2 class="whyUs__title">Why choose Our Food</h2>
                    <p class="whyUs__text">
                        Quality of Service, Food, Ambiance, and Value of 
                        Money are the primary elements for choosing a 
                        restaurant. Book N Dine is one of the most 
                        exquisite fine-dinning restaurant in Etawah 
                        city with a captivating view of GEC Hills, 
                        perfect ambiance, and scrumptious food.
                    </p>
                </div>
                <div class="whyUs__right" data-aos="fade-left">
                    <div class="whyUs__items__wrapper">
                            <div class="whyUs__item">
                                <div class="whyUs__item__icon">
                                    <img src="./images/whyUs-icon1.svg" alt="
                                    quality food ">
                                </div>
                                <p class="whyUs__item__text">Quality Food</p>
                            </div>
                            <div class="whyUs__item">
                                <div class="whyUs__item__icon">
                                    <img src="./images/whyUs-icon2.svg" alt="
                                    Classical taste ">
                                </div>
                                <p class="whyUs__item__text">Classical taste</p>
                            </div>
                            <div class="whyUs__item">
                                <div class="whyUs__item__icon">
                                    <img src="./images/whyUs-icon3.svg" alt="
                                    Skilled chef ">
                                </div>
                                <p class="whyUs__item__text">Skilled chef</p>
                            </div>
                            <div class="whyUs__item">
                                <div class="whyUs__item__icon">
                                    <img src="./images/whyUs-icon4.svg" alt="
                                    Best service ">
                                </div>
                                <p class="whyUs__item__text">Best service</p>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End why us Section-->
<!--Testimonial Section-->
<section id="testimonial" data-aos="fade-up">
    <div class="container">
        <div class="testimonial__wrapper">
            <h2 class="testimonial__title">What our customers say</h2>
            <div class="testimonial__item__wrapper">
                <div class="testimonial__item">
                    <div class="testimonial__item__img">
                        <img src="./images/testimonial_img1.png" alt="MN Hoda">
                    </div>
                    <div class="testimonial__item__info">
                        <h3 class="testimonial__item__name">Dr. M. N. Hoda</h3>
                        <div class="testimonial__item__stars">
                            <img src="./images/3star.png" alt="stars">
                        </div>
                        <p class="testimonial__item__text">
                            “Visited Book N Dine with friends last 
                            Sunday. Really lovely meal and very warm 
                            welcome - we would recommend this lovely 
                            restaurant and will try to go back again”
                        </p>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="testimonial__item__img">
                        <img src="./images/testimonial_img2.png" alt="vaishali joshi">
                    </div>
                    <div class="testimonial__item__info">
                        <h3 class="testimonial__item__name">Dr. Vaishali Joshi</h3>
                        <div class="testimonial__item__stars">
                            <img src="./images/3star.png" alt="stars">
                        </div>
                        <p class="testimonial__item__text">
                            “A warm and friendly welcome with fantastic 
                            customer service. Always great, tasty 
                            food served piping hot- just the way we 
                            love it . Would definitely recommend. 
                            We have been repeatedly and it's consistently
                             exceeded our expectations"
                        </p>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="testimonial__item__img">
                        <img src="./images/testimonial_img3.png" alt="ritika wason">
                    </div>
                    <div class="testimonial__item__info">
                        <h3 class="testimonial__item__name">Dr. Ritika Wason</h3>
                        <div class="testimonial__item__stars">
                            <img src="./images/3star.png" alt="stars">
                        </div>
                        <p class="testimonial__item__text">
                            from start to finish, lovely experience.
                             Hostess very pleasant, wait staff john was
                              wonderful and attentive, food plentiful 
                              and delicious, desserts out of this world"
                        </p>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="testimonial__item__img">
                        <img src="./images/testimonial_img4.png" alt="sunil pratap singh">
                    </div>
                    <div class="testimonial__item__info">
                        <h3 class="testimonial__item__name">Dr. Sunil Pratap Singh</h3>
                        <div class="testimonial__item__stars">
                            <img src="./images/3star.png" alt="stars">
                        </div>
                        <p class="testimonial__item__text">
                            I would just like to say thank you for 
                            the excellent service we received in your 
                            restaurant last night. Although the place 
                            was very busy we still had an excellent 
                            time and really appreciated the live 
                            entertainment too!
                        </p>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</section>
<!--End Testimonial Section-->
<!--Newsletter Section-->
<section id="newsletter" data-aos="fade-up">
    <div class="container">
        <div class="newsletter__wrapper">
            <div class="newsletter__info">
                <h3 class="newsletter__title">Join Newsletter</h3>
                <p class="newsletter__text">Get notified with the latest news and recent offers from the “Book N Dine”</p>
            </div>
            <div class="newsletter__form">
                <form>
                    <label for="email">
                        <input type="email" placeholder="Your Email Address">
                    </label>
                    <button type="submit">Join</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!--ENd Newsletter Section-->


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
                                <a href="https://www.facebook.com/mukesh.mewada.969952">
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
                                <a href="https://www.instagram.com/nitinpatidar814">
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
                                <a href="https://twitter.com/HimanshuPorwalS">
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
                            <a href="./index.php">Home</a>
                        </li>
                        <li>
                            <a href="./menu.php">Menu</a>
                        </li>
                        <li>
                            <a href="./booking2.html">Book Table</a>
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