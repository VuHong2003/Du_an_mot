<?php  require_once '../../../views/client/layout/header.php'?>

 <link rel="stylesheet" href="../../../public/client/assets/css/style.css">
 <link rel="stylesheet" href="../../../public/client/assets/css/formlogin.css">

 <body>
     <div class="login">
         <div class="center">
             <div class="login-container">
                 <div class="image-section">
                     <img src="https://inilabs-ebazaar.netlify.app/images/banners/auth.jpg" alt="Vegetables">
                 </div>
                 <div class="form-section">
                     <h2 class="sig-in">Sign In</h2>
                     <p class="sig-in">Sign in to continue shopping</p>
                     <form action="#" method="POST">
                         <label class="label_login" for="phone">Phone *</label>
                         <div class="phone-input">
                             <input type="tel" id="phone" placeholder="+880 1838 288389" required>
                         </div>
                         <label class="label_login" for="password">Password *</label><br/>
                         <input type="password" id="password" placeholder="" required>
                         <div class="remember-forgot">
                             <div class="remember-me">
                                 <input type="checkbox" id="remember">
                                 <label class="label_login" for="remember">Remember Me</label>
                             </div>
                             <a href="#" class="forgot-password">Forgot Password</a>
                         </div>
                         <button type="submit" class="rigister-button">Sign In</button>
                         <p class="signup-prompt">Don't have an account? <a href="register.php" class="signup-link">Sign Up</a></p>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </body>
 <?php  require_once '../../../views/client/layout/footer.php'?>