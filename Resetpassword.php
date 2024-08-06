<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/tv.png" type="image/x-icon"><title>Stream TV</title>
    <link rel="stylesheet" href="asset/style/css.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;1,200;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
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
                
<section id="Reset_title">
  <div class="title-reset">
    <p>Password Reset</p>
      <h1>You can reset your Password form here!</h1>
  </div>

<div id="reset">
<div class="reset-container">
  <div class="reset-form">
    <label for="username">Full Name:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Email:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Reset Password</button>

  </div>
</div>
</div>
</section>



<script>
    var menuBtn = document.getElementById("menuBtn") 
    var sideNav = document.getElementById("sideNav") 
    var menu= document.getElementById("menu") 

    sideNav.style.right = "-250px";

    menuBtn.onclick = function(){
      if(sideNav.style.right == "-200px"){ 
         sideNav.style.right = "0";
         menu.src = "images/close.png";
      }
      else{
        sideNav.style.right = "-200px";
        menu.src = "images/menu.png";
    }
  }

  </script>

</body>



    <!-- Footer Start -->
    
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
  </html>
