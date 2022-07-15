<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G7 Social Space | SignIn</title>
    <!--======= CSS link =======-->
    <link rel="stylesheet" href="main.css">
    <!--=============== ICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!--======= HEADER =======-->
    <header class="header">
        <div class="header-container">
            <h2 class="header-title"><a href="main.php" class="header-title-link">G7 Social Space</a></h2>
        </div>
    </header>

    <!--======= SIGNIN =======-->
    <div class="signup-container signin-container">
        <div class="signup-title">
            <h3 class="signup-title-name">G7 Social Space | Sign In</h3>
        </div>

        <form action="" method="post" class="signup-form">

            <div class="signup-inputbox">
                <i class='bx bx-envelope'></i>
                <input type="email" name="email" placeholder="Email" required class="sign-input">
            </div>

            <div class="signup-inputbox">
                <i class='bx bx-lock-alt' ></i>
                <input type="password" name="pass" placeholder="Password" required class="sign-input">
            </div>

            <div class="signup-button-container">
            <button id="signin" class="button sign-button" name="login">Login</button>
                <a href="forgot_password.php" title="Create new password">Forgot Password?</a>
                <a href="signup.php" title="Create one now!">Don't have an account?</a>
            </div>

            <?php include("login.php"); ?>

        </form>
    </div>

    <!--======= FOOTER =======-->
    <footer class="home-footer">
        <div class="footer-links">
            <a href="main.php" class="footer-link">HOME</a>
            <a href="signup.php" class="footer-link">SignUp</a>
            <a href="#" class="footer-link">FAQ</a>
            <a href="#" class="footer-link">Privacy</a>
            <a href="#" class="footer-link">Terms</a>
            <a href="#" class="footer-link">Conditions</a>
            <a href="#" class="footer-link">Cookies</a>
            <a href="#" class="footer-link">Help</a>
            <a href="#" class="footer-link">Support</a>
            <a href="#" class="footer-link">Policy</a>
            <a href="#" class="footer-link">Careers</a>
            <a href="#" class="footer-link">Help</a>
            <a href="about.us" class="footer-link">About</a>
        </div>
        <div class="footer-rights">
            <a href="#" class="rights-link">@2022 <strong>Group 7 Social Space</strong></a>
        </div>
    </footer>

</body>
</html>