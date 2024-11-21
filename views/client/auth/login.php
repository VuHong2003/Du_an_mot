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
=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="css.css">
</head>

<body>
    <div class="login-container">
        <div class="login-left">
            <img src="https://inilabs-ebazaar.netlify.app/images/banners/auth.jpg" alt="eBazaar Image">
        </div>
        <div class="login-right">
            <h2 style="text-align: center;">Đăng Nhập</h2>
            <p  stylse="text-align: center;">Đăng nhập để mua hàng</p>
            <form action="/controllers/client/index.php" method="POST">
                <label for="phone">Số điện thoại</label>
                <div class="input-group">
                    <div class="country-code"></div>
                    <input type="text" id="phone" name="phone" placeholder="Hãy nhập số điện thoại của bạn" required>
                </div>

                <label for="password">Mật khẩu </label>
                <input type="password" id="password" name="password" placeholder="" required>

                <div class="options">
                    <label><input type="checkbox" name="remember">Nhớ mật khẩu</label>
                    <a href="#" class="forgot-password">Quên mật khẩu</a>
                </div>

                <button type="submit" class="sign-in-btn">Đăng Nhập</button>
            </form>
            <p class="sign-up-text">Bạn chưa có tài khoản? <a href="#">Đăng ký</a></p>
        </div>
    </div>
</body>

</html>
