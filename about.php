<?php

include 'config.php';

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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
          <p>Our mission is to simplify your life by providing expertly crafted meal plans that are both quick to prepare and easy to follow. Each of our 5-day meal plans is designed with busy lifestyles in mind, ensuring you can enjoy wholesome, satisfying meals without spending hours in the kitchen.</p>
          <p>Our team of culinary experts and nutritionists work tirelessly to create recipes that are not only delicious but also balanced and nourishing. We focus on using fresh, seasonal ingredients that you can find at your local grocery store, making healthy eating accessible and convenient.</p>
          <p>Whether you're a seasoned cook looking for new ideas or someone just starting their culinary journey, "Quick & Easy: 5-Day Busy Lifestyle Meal Plan" offers something for everyone. From time-saving tips to step-by-step guides, we aim to make meal planning and cooking a stress-free and enjoyable experience.</p>
          <p>Join us on this journey to a more organized, nutritious, and flavorful life. With our meal plans, you'll spend less time worrying about what's for dinner and more time savoring every bite. Let's make every meal a moment of joy and simplicity</p>
          <p>Welcome to your new favorite way to eat well, even on the busiest days!</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>This recipe app is fantastic! It’s so easy to use, and I love being able to see my latest recipe highlighted. The image uploader is a great touch!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Finally, an app that lets me organize my recipes perfectly! The update and delete features work seamlessly. Highly recommend it!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Emily </h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>I’ve tried many recipe apps, but this one is by far the best. The design is clean, and adding recipes is a breeze. The separate column for the latest recipe is genius!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Michael</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>As someone who loves cooking, this app is a game-changer. I love how it lets me upload images and keep everything organized. Great job!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sarah L</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>This app is incredibly user-friendly. I can add, update, and delete recipes with ease. The interface is intuitive, and the latest recipe feature is really helpful.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>David</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>I’m in love with this recipe app. It’s so simple to use, and the layout is beautiful. Seeing my latest recipe in a separate column is such a nice touch.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jessica</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>