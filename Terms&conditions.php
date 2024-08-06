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
              <li><a href="index.php#Pricing">Pricing</a></li>
            </ul>
          </nav>

        </div>  
        <div id="menuBtn">
          <img src="./images/menu.png" id="menu">
        </div>
                
    <section id="TermsConditions">
        <div class="title-Terms">
          <p>Terms & Conditions</p>
      
            <h1>Terms and Conditions for Stream TV - Effective Date: 01/07/2023.</h1>
      
        </div>
      
<div id="containerTerms">
  <ul>
    <li>
        <p> These Terms and Conditions govern your use of the Stream TV website and the services provided on the website. By
          accessing or using our website, you acknowledge and agree to be bound by these terms and conditions. If you do not
          agree with any part of these terms, please refrain from using our website.</p>
        </li>

        <li>
        <h2> 1. Intellectual Property: </h2>
        <p><span class="Priv">a.</span> All content on the website, including but not limited to text, graphics, logos, images,
          videos, and software, is the intellectual property of [Company Name] and is protected by copyright laws.</p>
        <p><span class="Priv">b.</span> You may not reproduce, modify, distribute, transmit, display, perform, or use any of our
          intellectual property without prior written consent from Stream TV.</p>
        
        <h2> 2. User Conduct:</h2>
        <p><span class="Priv">a.</span> You agree to use our website and services for lawful purposes and in compliance with
          applicable laws and regulations.</p>
        <p><span class="Priv">b.</span> You shall not engage in any activity that may disrupt or interfere with the functioning of our website or
          compromise its security.</p>
        <p><span class="Priv">c.</span> You shall not engage in any form of unauthorized access, data mining, scraping, or any activity that may harm our
          website or infringe upon the privacy of other users.</p>
        
        <h2> 3. Privacy:</h2>
        <p><span class="Priv">a.</span> Your privacy is important to us. Please refer to our Privacy Policy to understand how we
          collect, use, and protect your personal information.</p>
        
        <h2> 4. Disclaimer of Warranties: </h2>
        <p><span class="Priv">a.</span> The content and services provided on our website are provided on an "as is" and "as
          available" basis without any warranties, express or implied.</p>
        <p><span class="Priv">b.</span> Stream TV does not warrant that the website will be error-free, uninterrupted, secure, or free from viruses or
          other harmful components.</p>
        
         <h2> 5. Limitation of Liability: </h2>
         <p><span class="Priv">a.</span> Stream TV and its affiliates, directors, employees, and agents shall not be liable for any direct, indirect,
          incidental, consequential, or exemplary damages arising from your use of our website or reliance on any information or
          content provided on the website.
          <p><span class="Priv">b.</span> Stream TV shall not be responsible for any losses or damages resulting from the unauthorized access to or use
          of your personal information.</p>
        
          <h2> 6. Third-Party Links:</h2>
          <p><span class="Priv">a.</span> Our website may contain links to third-party websites or services. We do not endorse or control the content or
          practices of these third-party websites. Your use of third-party websites is subject to their respective terms and
          conditions and privacy policies.</p>
        
          <h2> 7. Modifications to Terms and Conditions: </h2>
          <p><span class="Priv">a.</span> We reserve the right to modify or update these Terms and Conditions at any time without prior notice. The updated
          terms will be effective upon posting on our website. Your continued use of our website after any modifications
          signifies your acceptance of the updated terms.</p>
        
          <h2> 8. Governing Law and Jurisdiction:</h2>
          <p><span class="Priv">a.</span> These Terms and Conditions shall be governed by and construed in accordance with the laws of [Jurisdiction]. Any
          disputes arising out of or in connection with these terms shall be subject to the exclusive jurisdiction of the courts
          of [Jurisdiction].</p>
        
          <h2> 9. Contact Us: </h2>
          <p> If you have any questions, concerns, or requests regarding these Terms and Conditions, please contact us at [contact
          email or address]. </p>
        
          <p> using our website, you acknowledge that you have read, understood, and agreed to these Terms and Conditions.</p>


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
              <li><a href="#Services">Services</a></li>
              <li><a href="#Pricing">Pricing</a></li>
              <li><a href="#testimonial">Testimonial</a></li>
              <li><a href="signup.php">signup</a></li>
            </ul>
          </div>
          
          <div class="footer-col">
            <h4>Service</h4>
            <ul>
              <li><a href="PrivacyPolicy.php">Privacy Policy</a></li>
              <li><a href="RefundPolicy."php>Refund Policy</a></li>
              <li><a href="Terms&conditions.php">Terms & Conditions</a></li>
              <li><a href="#faqs">FAQ's</a></li>
              <li><a href="login.php">login</a></li>    
            </ul>
          </div>

          <div class="footer-col">
            <h4>Contact</h4>
            <ul>
              <li><a href="#ContactUs">Contact Us</a></li>
              <li><a href="#AboutUs">About Us</a></li>
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
