<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive diet website</title>
    <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <!-- swiper cdn link -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <!-- custom css link -->
</head>
<body>
    <style>
        body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, sans-serif;
}

.bg-image {
    background-image: url(images/home.jpg);
    filter: blur(5px);  /* Optional: Add a blur effect */
    -webkit-filter: blur(5px); /* Optional: Add a blur effect */
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}

.bg-text {
    background-color: rgba(0, 0, 0, 0.4); /* Black background with transparency */
    color: white;
    font-weight: bold;
    border: 3px solid #f1f1f1;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 2;
    width: 80%;
    padding: 20px;
    text-align: center;
}

.signup-btn {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 12px;
}

.signup-btn:hover {
    background-color: #45a049; /* Darker green */
}
    </style>

<!-- home section starts -->

    <body>
    <div class="bg-image"></div>
    <div class="bg-text">
        <h1>WELCOME TO THE PLACE OF MEAL PLANNER WEBSITE</h1>
        <a href="register.php" class="signup-btn">SIGNUP</a>
    </div>

<!-- home section ends -->

</body>
</html>