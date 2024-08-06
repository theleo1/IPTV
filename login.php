<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Welcome to our IPtv website, where entertainment meets convenience. Discover a world of high-quality television programming, movies, and on-demand content right at your fingertips. With our IPtv services, you can enjoy an extensive selection of local and international channels, sports events, news updates, and captivating entertainment from the comfort of your own home. Our user-friendly interface and cutting-edge technology ensure a seamless and personalized viewing experience. Choose from customizable packages and flexible subscriptions that cater to your unique preferences. Join us on this incredible journey of immersive entertainment, where limitless possibilities await you. Start enjoying the future of television with our IPtv services today!">
    <link rel="shortcut icon" href="images/tv.png" type="image/x-icon"><title>Stream TV</title>
    
    <!-- for swiper slider-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
    
    <!--style css all pages-->
    <link rel="stylesheet" href="asset/style/css.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--font-Family size's-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;1,200;1,400;1,500&display=swap" rel="stylesheet">
    

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body> 
        
        <a href="index.php"><img src="images/live.png" class="logo" alt="logo"></a>
        <a href="index.php"><h1 class="logo-Text">Stream TV</h1></a>
    

    <div id="sideNav">
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php#Services">Services</a></li>
          <li><a href="index.php#testimonial">Testimonial</a></li>
          <li><a href="index.php#ContactUs">Contact Us</a></li>
          <li><a href="index.php#AboutUs">About US</a></li>
          <li><a href="index.php#faqs">FAQ</a></li>
          <li><a href="signup.php">Subscribe</a></li>
          <li><a href="login.php">Log In</a></li>
          <li><a href="pricing.php">Pricing</a></li>
        </ul>
      </nav>

    </div>  
    <div id="menuBtn">
      <img src="./images/menu.png" id="menu">
    </div>
            

                  <!--form login-->
<div class="titlePagelog">
  <div class="title-login">
    <p>Log In</p>                 
    <h1>Connect to your Account Stream TV</h1>
  </div>
</div>

<section id="login">

<div class="login-container">
  <div class="login-form">
    <label for="username">Nom d'utilisateur:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Mot de passe:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Se connecter</button>
    <br>
    <div class="links">
      <a href="Resetpassword.php">Mot de passe oublié?</a>
      <a href="signup.php">Créer un compte</a>
    </div>
  </div>
</div>

</section>

<!--Scripting-->

<script>
      var menuBtn = document.getElementById("menuBtn") 
      var sideNav = document.getElementById("sideNav") 
      var menu= document.getElementById("menu") 

      sideNav.style.right = "-250px";

      menuBtn.onclick = function(){
        if(sideNav.style.right == "-250px"){ 
           sideNav.style.right = "0";
           menu.src = "images/close.png";
        }
        else{
          sideNav.style.right = "-250px";
          menu.src = "images/menu.png";
      }
    }

    </script>


<!--footer-->

    <!-- Footer Start -->
<br>
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4>helpful links</h4>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="index.php#Services">Services</a></li>
              <li><a href="index.php#testimonial">Testimonial</a></li>
              <li><a href="pricing.php">Pricing</a></li>
              <li><a href="signup.php">signup</a></li>
            </ul>
          </div>
          
          <div class="footer-col">
            <h4>Service</h4>
            <ul>
              <li><a href="PrivacyPolicy.php">Privacy Policy</a></li>
              <li><a href="RefundPolicy.php">Refund Policy</a></li>
              <li><a href="Terms&conditions.php">Terms & Conditions</a></li>
              <li><a href="index.php#faqs">FAQ's</a></li>
              <li><a href="login.php">login</a></li>    
            </ul>
          </div>

          <div class="footer-col">
            <h4>Contact</h4>
            <ul>
              <li><a href="index.php#ContactUs">Contact Us</a></li>
              <li><a href="index.php#AboutUs">About Us</a></li>
              <li><a href="#">affiliate program</a></li>
              <li><a href="#">order status</a></li>
              <li><a href="#">payment options</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <br>
          <br>
          <p>© 2023 StreamTV. All rights reserved.| Design by KAMAL DEV</p>
        </div>
      </div>
   </footer>
   </body>
  </html>

