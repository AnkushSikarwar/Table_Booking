<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking | Book N Dine</title>
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./globalStyles.css">
    <link rel="stylesheet" href="./components.css">
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
                        <li><a href="./index.html" class="nav__link">Home</a> </li>
                        <li><a href="./menu.html" class="nav__link">Menu</a> </li>
                        <li><a href="./about.html" class="nav__link">About</a> </li>
                        <li><a href="./contact.html" class="nav__link">Contact</a></li>
                        <li><a href="./booking.html" class="btn primary-btn">Book Table</a> </li>
                    </div>
                </ul>
            </nav>
        </div>
    </div>
    <!--End Nav Section -->
    <!--Booking Section-->
     <section id="form" data-aos="fade-up">
        <div class="container">
            <h3 class="form__title">Update Your Booking</h3>
            <div class="form__wrapper">
                <form action="" method="post">
                   

                    <?php
                    include 'connection.php';

                    $ids = $_GET['id'];
                    $showquery = "Select * from booktable where id={$ids}";
                    $showdata = mysqli_query($con,$showquery);
                    $arrdata = mysqli_fetch_array($showdata);



                    if(isset($_POST['submit'])){

                        $idupdate = $_GET['id'];

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

                       // $insertquery = "insert into booktable(firstName,lastName,email,tableType,guestNumber,placement,date,arrivaltime,daparturetime,mobilenumber,note) values('$firstName','$lastName','$email','$tableType','$guestNumber','$placement','$date','$arrivaltime','$departuretime','$mobilenumber','$note')";
                        
                        $query = " update booktable set id=$idupdate,
                        firstName='$firstName',lastName='$lastName',
                        email='$email' ,tableType='$tableType',
                        guestNumber='$guestNumber',placement='$placement',
                        date='$date' , arrivaltime='$arrivaltime',
                        departuretime='$departuretime',
                        mobilenumber='$mobilenumber',note='$note' 
                        where id=$idupdate ";


                        
                        $res = mysqli_query($con,$query);
                        if($res){
                            ?>
                            <script>
                                alert("Data Update Successfully");
                                </script>
                            <?php
                        }else{
                            ?>
                            <script>
                                alert("Data Not Is Upadate");
                                </script>
                                <?php
                        }
                        }
                        ?>
                    

                    <div class="form__group">
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" name="firstName" value="<?php echo $arrdata['firstName']; ?>"required>
                    </div>
                    <div class="form__group">
                        <label for="lastName">Last Name</label>
                        <input type="text" id="lastName" name="lastName" value="<?php echo $arrdata['lastName']; ?>"required>
                    </div>
                    <div class="form__group">
                        <label for="Email">Email</label>
                        <input type="email" id="email" name="email" value="<?php echo $arrdata['email']; ?>"required>  
                    </div>
                    <div class="form__group">
                        <lable for="tableType">Table Type</lable>
                        <select id="tableType" name="tableType" value="<?php echo $arrdata['tableType']; ?>" required>
                            <option selected disabled>Choose</option>
                            <option value="Small">Small (2 persons)</option>
                            <option value="Medium">Medium (4 persons)</option>
                            <option value="Large">Large (6 persons)</option>
                            <option value="Medium Large">Medium Large (8 persons)</option>
                            <option value="Extra Large">Extra Large (10 persons)</option>
                        </select>
                    </div>
                    <div class="form__group">
                        <label for="guestNumber">Guest Number</label>
                        <input type="number" id="guestNumber" name="guestNumber" min="1" max="10" value="<?php echo $arrdata['guestNumber']; ?>"required>
                    </div>
                    <div class="form__group">
                        <lable for="placement">Placement</lable>
                        <select  id="placement" name="placement" value="<?php echo $arrdata['placement']; ?>"required>
                            <option selected disabled>Choose</option>
                            <option value="outdoor">Outdoor</option>
                            <option value="Indoor">Indoor</option>
                            <option value="rooftop">Rooftop</option>
                        </select>
                    </div>
                    <div class="form__group">
                        <lable for="date" >Date</lable>
                        <input type="date" id="date" name="date" value="<?php echo $arrdata['date']; ?>" required>
                    </div>
                    <div class="form__group">
                        <lable for="time" >Arrival Time</lable>
                        <input type="time" id="arrivaltime" name="arrivaltime" value="<?php echo $arrdata['arrivaltime']; ?>"required>
                    </div>
                    <div class="form__group">
                        <lable for="time" >Departure Time</lable>
                        <input type="time" id="departuretime" name="departuretime" value="<?php echo $arrdata['departuretime']; ?>" required>
                    </div>
                    <div class="form__group">
                        <label for="mobilenumber">Mobile Number</label>
                        <input type="tel" id="mobilenumber" name="mobilenumber" value="<?php echo $arrdata['mobilenumber']; ?>"required>
                    </div>
                    <div class="form__group form__group__full">
                        <label for="note">Note</label>
                        <textarea  id="note" name="note" rows="4" aria-valuetext="<?php echo $arrdata['note']; ?>" required></textarea>
                    </div>
                    <button type="submit" class="btn primary-btn" name="submit" >Update</button>
                </form>
            </div>
        </div>
     </section>
    <!--End Booking Section-->

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
                            <a href="./booking.html">Book Table</a>
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