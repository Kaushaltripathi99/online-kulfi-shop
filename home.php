<?php
@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Kulfi Shop | HOME</title>
    <link rel="stylesheet" href="css/style12.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1478px)" href="css/phone.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
   <?php @include 'header.php'; ?>
    <section id="home">
        <h1 class="h-primary">The Kulfi's S<u style="text-decoration-color:yellow">hop</u></h1>
        <p>Make Your Taste, More Tastier</p>
        <a href="shop.php">
            <button class="btn">S<u style="text-decoration-color: yellow">hop Now</u></button>
        </a>
    </section>
    <div id="thought">
        <img src="kulfi images/icecream_mini-logo2.jpg" alt="The Kulfi Shop">
        <h2>You can mix and match flavors so everyone at an event can get their favorites, or choose one flavor and make a statement with it. Whatever you choose, we will be happy to s<u style="text-decoration-color:yellow">erve you.</u></h2>
    </div>
    <section id="services-container">
        <div id="services">
            <div class="boxer">
                <a href="shop.php">
                    <img src="kulfi images/Mango Kulfi.jpg" alt="Mango Kulfi" width="450px" height="450px" id="img1">
                </a>
                    <img src="kulfi images/icecream_mini-logo.jpg" alt="The Kulfi Shop" height="40px" id="mini-img">
                    <h2 class="h-secondary center">Mango K<u style="text-decoration-color: yellow">ulfi</u></h2>
            </div>
            <div class="boxer">
                <img src="kulfi images/icecream.jpg" alt="Icecream Logo" width="450px" height="550px" id="img2">
            </div>
            <div class="boxer">
                <a href="shop.php">
                    <img src="kulfi images/Thandai Kulfi.jpg" alt="Thandai Kulfi" width="450px" height="450px" id="img3">
                </a>    
                    <img src="kulfi images/icecream_mini-logo.jpg" alt="The Kulfi Shop" height="40px" id="mini-img">
                    <h2 class="h-secondary center">Thandai K<u style="text-decoration-color: yellow">ulfi</u></h2>
            </div>
        </div>
    </section>
    <div id="thought2">
        <img src="kulfi images/banarasi-kulfi.png" alt="The Kulfi Shop">
    </div>
    <footer>
        <div id="contact-box">
            <form action="signup_page.html">
                <div class="form-grow">
                    <div class="container">
                        <div class="row">
                            <div class="footer-col">
                                <h4>quick links</h4>
                                <ul>
                                    <li><a href="home.php">home</a></li>
                                    <li><a href="about.php">about</a></li>
                                    <li><a href="contact.php">contact</a></li>
                                    <li><a href="shop.php">shop</a></li>
                                </ul>
                            </div>
                            <div class="footer-col">
                                <h4>extra links</h4>
                                <ul>
                                    <li><a href="login.php">login</a></li>
                                    <li><a href="register.php">register</a></li>
                                    <li><a href="orders.php">my orders</a></li>
                                    <li><a href="cart.php">my cart</a></li>
                                </ul>
                            </div>
                            <div class="footer-col">
                                <h4>contact info</h4>
                                <ul>
                                    <li><a> <i class="fas fa-phone"></i> +91-9369023177 </a></li>
                                    <li><a> <i class="fas fa-phone"></i> +91-9690341779 </a></li>
                                    <li><a> <i class="fas fa-envelope"></i> thekulfi.shop@gmail.com </a></li>
                                    <li><a> <i class="fas fa-map-marker-alt"></i> Varanasi, India - 221001 </a></li>
                                </ul>
                            </div>
                            <div class="footer-col">
                                <h4>Social Media</h4>
                                <div class="social-links">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div><br>
                    <br><br><div class="center">
                        &copy; copyright @ <?php echo date('Y'); ?>. All Rights Are Reserved<br>
                         by <span>Mr. Arjun Jaitly and Mr. Kaushal Tripathi</span>
                    </div>
                </div>
            </form>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>