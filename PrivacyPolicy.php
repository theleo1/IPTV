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
                
    <section id="PrivacyPolicy">
        <div class="title-Privacy">
          <p>Privacy and Policy</p>
      
            <h1>Privacy Policy for Stream TV - Effective Date: 01/07/2023.</h1>
      
        </div>
      
<div id="containerPriv">
  <ul>
    <li>
        <p> At Stream TV, we are committed to protecting the privacy and personal information of our users. This Privacy Policy
        outlines how we collect, use, disclose, and protect the information you provide to us when using our IP TV services. By
        accessing or using our website and services, you consent to the terms and practices described in this policy.</p>
    </li>  
      
    <li>
        <h2> 1. Collection of Information: </h2>
        <p><span class="Priv">✓</span> Personal Information: We may collect personal information such as your name, email address, billing information, and
        device information when you create an account or make a purchase on our website.</p>
    </li>
    <li>      
      <p><span class="Priv">✓</span> Usage Information: We may collect non-personal information about your interaction with our website and services,
        including IP address, browser type, device information, and usage patterns. This information helps us improve our
        services and provide a better user experience. </p>
    </li>
    <li>    
        <h2> 2. Use of Information:</h2>

        <p><span class="Priv">✓</span> Information: We use personal information to provide and deliver our services, process transactions,
        communicate with you, and personalize your experience. We may also use this information to send you promotional offers
        and updates if you have provided your consent. </p>
        <p><span class="Priv">✓</span> Usage Information: We use non-personal information to analyze trends, track website usage, improve our services, and
        enhance overall performance.</p>
    </li>
    <li>    
        <h2> 3. Disclosure of Information: </h2>

        <p><span class="Priv">✓</span> Third-Party Service Providers: We may engage trusted third-party service providers to assist us in delivering our
        services and conducting business operations. These providers are bound by confidentiality agreements and are only
        authorized to use your information as necessary to provide their services to us.</p>

        <p><span class="Priv">✓</span> Legal Requirements: We may disclose your information if required by law, court order, or government regulations to
        comply with legal obligations, protect our rights, or investigate any fraudulent activities. </p>
    </li>
    <li>    
        <h2> 4. Data Security: </h2>

        <p><span class="Priv">✓</span> We implement reasonable security measures to protect your information from unauthorized access, misuse, alteration, or
        loss. However, please note that no method of transmission over the internet or electronic storage is 100% secure, and we
        cannot guarantee absolute security. </p>
    </li>
    <li>    
        <h2> 5. Third-Party Links: </h2>
        <p><span class="Priv">✓</span> Our website may contain links to third-party websites or services. We are not responsible for the privacy practices or
        content of these third-party websites. We encourage you to review the privacy policies of those websites before
        providing any personal information.</p>
    </li>
    <li>    
        <h2> 6. Children's Privacy:</h2>
        <p><span class="Priv">✓</span> Our services are not intended for children under the age of 13. We do not knowingly collect personal information from
        individuals under the age of 13. If we become aware that we have inadvertently collected personal information from a
        child under 13, we will take steps to delete the information as soon as possible.</p>
    </li>
    <li>    
        <h2> 7. Changes to the Privacy Policy: </h2>
        <p><span class="Priv">✓</span> We may update this Privacy Policy periodically to reflect changes in our practices or legal requirements. We will notify
        you about significant changes by posting a prominent notice on our website or sending a direct communication. Please
        review this Privacy Policy periodically for any updates.</p>
    </li> 
    <li>
        <h2> 8. Contact Us: </h2>
        <p><span class="Priv">✓</span> If you have any questions, concerns, or requests regarding this Privacy Policy or our data practices, please contact us
        at [contact email or address].</p>
    </li>
    <li>    
        <p> By using our website and services, you acknowledge that you have read and understood this Privacy Policy and agree to
        the collection, use, and disclosure of your information as described herein.</p>
    </li>
  </ul>

</section>



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
</body>

<!--footer-->
    
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


















