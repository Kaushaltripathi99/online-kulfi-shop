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
   <title>The Kulfi Shop | About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>About Us</h3>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="kulfi images/Chocolate kulfi.jpg" alt="" style="height: 500px;">
        </div>

        <div class="content">
            <h3>Why choose us?</h3>
            <p>
            The Kulfi Shop was started in the year 2019 as a single store in Banaras, Uttar Pradesh. By 2022 The Kulfi Shop has grown in to 85+ Outlets in 12 States with immense support from happy customers.
        </p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>What we provide?</h3>
            <p>If you are a Kulfi Lover, The Kulfi Shop is the best place to be in. We serve more than 120+ flavours of Kulfis & Ice Creams made from pure milk.  All our Kulfis are made in the same old traditional method, which gives it Rich Creamy texture. We are first Kulfi Manufacturer in India to introduce Ice Cream flavours in to Kulfi like Red Velvet, Blueberry, White Chocolate Raspberry, Chocolate Brownie, Oreo, Coffee Walnut, Kit Kat and many other flavours.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="kulfi images/simple kulfi.jpg" alt="" style="height: 500px;">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="kulfi images/Thandai Kulfi.jpg" alt="" style="height: 500px;">
        </div>

        <div class="content">
            <h3>what we do?</h3>
            <p>We take pride in serving the highest quality of premium Kulfis and Ice Creams. Customer is our top priority and we do what ever it takes to enhance customer experience at every stage. An upscale and world class experience in the premium Kulfi category, The Kulfi Shop offers a luxurious atmosphere where customers can enjoy our Kulfis.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>It has an awesome taste and the best brand for kulfi I ever had.I tried this kulfi many times it's so tasty and get in different flavours.price is reasonable and everyone loves it surely</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Vikram Pratap Singh</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>pista kulfi is delicious and creamy rich in taste. Mouth watering and tempting taste of nuts and it is made with the milk solids, pista pieces.<br>😉</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Tanu Singh</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>Great variety of kulfis. I liked the way they serve kulfi. Must try their pista matka kulfi. The ambience is really refreshing.<br>
            😄</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Ajay Rajpoot</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>This is the place to go for satiating your kulfi and dessert craving. I ordered takeaway of Malai Kulfi, while a friend settled with Chocolate Kulfi. All of them were amazeballs! So, sweet!😉</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Rajni Tiwari</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>Great taste with some amazing flavours. The cassata here is really good. It's one of the worth trying items here. And even the chocolate kulfi is really great.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Naveen Kumar</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>The kulfi here is just amazing, the variety is big and you just keep eating more and more. I d love to return back<br>😄</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Satish Kumar Chaudhary</h3>
        </div>

    </div>

</section>
<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>