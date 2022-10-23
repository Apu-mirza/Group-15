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
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p>Easy to use, shop and order. customer gets fresh and natural products in cheap cost. We also provide extra security and care for customers.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>Easy to use, shop and orders. Here we provides fresh and natural fruits, vegetables, fish, meats, snacks, instant foods, cooking essentials etc.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic_at_ju.jpg" alt="">
         <p>Really great website that is easy to use and compared with other product ordering sites, the food photos are way nicer than other. A bit disappointed that as I am a frequent user, spending a lot of money while ordering product delivery, I do rarely see that I do get any recognition for using spgrocery.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mirza Labib</h3>
      </div>

      <div class="box">
         <img src="images/mirza3.jpg" alt="">
         <p>Really great website that is easy to use and compared with other product ordering sites, the food photos are way nicer than other. A bit disappointed that as I am a frequent user, spending a lot of money while ordering product delivery, I do rarely see that I do get any recognition for using spgrocery.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mehrab Hossain</h3>
      </div>

      <div class="box">
         <img src="images/profile.png" alt="">
         <p>Really great website that is easy to use and compared with other product ordering sites, the food photos are way nicer than other. A bit disappointed that as I am a frequent user, spending a lot of money while ordering product delivery, I do rarely see that I do get any recognition for using spgrocery.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Tarikul Islam</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Really great website that is easy to use and compared with other product ordering sites, the food photos are way nicer than other. A bit disappointed that as I am a frequent user, spending a lot of money while ordering product delivery, I do rarely see that I do get any recognition for using spgrocery.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rumana Khan</h3>
      </div>

      <div class="box">
         <img src="images/Mirza1.jpg" alt="">
         <p>Really great website that is easy to use and compared with other product ordering sites, the food photos are way nicer than other. A bit disappointed that as I am a frequent user, spending a lot of money while ordering product delivery, I do rarely see that I do get any recognition for using spgrocery.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Habib Islam</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Really great website that is easy to use and compared with other product ordering sites, the food photos are way nicer than other. A bit disappointed that as I am a frequent user, spending a lot of money while ordering product delivery, I do rarely see that I do get any recognition for using spgrocery.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sabrina kazi</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>