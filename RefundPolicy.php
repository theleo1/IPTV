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
                
    <section id="RefundPolicy">
        <div class="title-Refund">
          <p>Refund Policy</p>
            <h1>Refund Policy for Stream TV - Effective Date: 01/07/2023.</h1>

        </div>
      
        <div id="containerPriv">
          <ul>
            <li>
                <p> At Stream TV, we strive to ensure your satisfaction with our products and services. This Refund Policy outlines the
                  terms and conditions regarding refunds for purchases made on our website. By making a purchase, you acknowledge and
                  agree to the following terms:</p>
            </li>  
              
            <li>
                <h2> 1. Eligibility for Refunds: </h2>

                <p><span class="Priv">a.</span> Digital Products: Due to the nature of digital products, such as software licenses,
                  subscriptions, or downloadable content, refunds may be granted only under specific circumstances, as outlined below.</p>

                <p><span class="Priv">b.</span> Physical Products: Refunds for physical products are subject to different policies, which are detailed separately on our website or during the purchase process.
                </p>

              <p><span class="Priv">c.</span> Usage Information: We may collect non-personal information about your interaction with our website and services,
                including IP address, browser type, device information, and usage patterns. This information helps us improve our
                services and provide a better user experience. </p>
            </li>
            <li>    
                <h2> 2. Refund Requests and Process:</h2>
        
                <p><span class="Priv">a.</span> Refund Requests: To request a refund, you must submit a refund request within a specified time frame, which may vary depending on the product or service purchased. Please refer to the specific product's terms and conditions or contact our customer support for more information.
                </p>
                <p><span class="Priv">b.</span> Contact Information: You may need to provide accurate contact information, order details, and a clear reason for your refund request to assist us in processing your request promptly.</p>
                <p><span class="Priv">c.</span> Evaluation: Each refund request will be evaluated on a case-by-case basis. We reserve the right to decline refund requests if they do not meet the eligibility criteria outlined in this policy.</p>
                <p><span class="Priv">d.</span> Refund Processing: If your refund request is approved, we will initiate the refund process within a reasonable time frame. The refund will be processed using the original payment method used during the purchase, unless otherwise specified.
                </p>
            </li>
            <li>    
                <h2> 3. Non-Refundable Items and Services: </h2>
                <p><span class="Priv">a.</span> Certain circumstances may render certain items or services non-refundable, including but not limited to:</p>        
                  <p> i. Products or services that have been used, modified, or damaged.</p>
                  <p> ii. Products or services that have been explicitly marked as non-refundable during the purchase process.</p>
                  <p> iii. Services that have already been rendered or provided.</p>
        
                <p><span class="Priv">b.</span> Please review the specific product's terms and conditions or contact our customer support for more information on non-refundable items and services.
                </p>
            </li>
            <li>    
              
                <h2> 4. Charge backs and Disputes: </h2>
                <p><span class="Priv">a.</span> Charge backs: In the event of a charge back or payment dispute initiated by you through your financial institution, our refund policy will be considered null and void. The resolution of the dispute will be governed by the policies and procedures of the financial institution and relevant payment processor.
                </p>
                <p><span class="Priv">b.</span> Unauthorized Use: If we suspect or identify any unauthorized use, fraud, or violation of our terms of service, we reserve the right to take appropriate legal actions and dispute any charge backs or disputes initiated by you.</p>

              </li>
            <li>    
                <h2> 5. Modifications to the Refund Policy: </h2>
                <p><span class="Priv">a.</span> We reserve the right to modify or update this Refund Policy at any time. The updated
                  policy will be effective upon posting on our website. Please review this policy periodically for any changes.</p>
            </li>
            <li>    
                <h2> 6. Contact Us:</h2>
                <p><span class="Priv">✓</span> If you have any questions, concerns, or requests regarding our refund policy, please contact our customer support team
                  at [contact email or address]. We will be happy to assist you.
        </p>
            </li>

            <li>    
                <p>By making a purchase on our website, you acknowledge that you have read, understood, and agreed to the terms and
                  conditions outlined in this Refund Policy.
        </p>
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


    <!-- Footer Start -->
    
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4>helpful links</h4>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="index.php#Services">Services</a></li>
              <li><a href="index.php#Pricing">Pricing</a></li>
              <li><a href="index.php#testimonial">Testimonial</a></li>
              <li><a href="pricing.php"></a></li>
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




















