<?php include '../views/client/layout/header.php'; ?>
<link rel="stylesheet" href="../../../public/client/assets/css/style.css">
<link rel="stylesheet" href="../../../public/client/assets/css/register.css">
 <body>
 <div class="container-register">
 <div class="center">
        <div class="signup-box">
            <div class="left">
                <img src="https://inilabs-ebazaar.netlify.app/images/banners/auth.jpg" alt="Vegetables" class="signup-image">
            </div>
            <div class="rightt">
                <h2 class="title">Sign Up</h2>
                <p class="subtitle">Register a new open account</p>
                <form class="authform">
                    <label for="name">Name *</label>
                    <input type="text" id="name" class="input" placeholder="miron mahmud" required>
                    <div class="input-phone">
                        <label for="phone">Phone *</label>
                        <a href="#" class="use-email">Use Email Instead</a>
                    </div>
                    <input type="text" class="input" id="phone" placeholder="+880 1838 288389" required>
                    <label for="password">Password *</label>
                    <input type="password" class="input" id="password" required>
                    <label for="confirm-password">Confirm Password *</label>
                    <input type="password" class="input" id="confirm-password" required>
                    <button type="submit" class="signup-button">Sign Up</button>
                </form>
                <p class="signin-link">Already have an account? <a href="?act=login">Sign In</a></p>
            </div>
        </div>
        </div>
    </div>
</body>
<?php include '../views/client/layout/footer.php'; ?>
