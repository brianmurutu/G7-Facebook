<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G7 Social Space | Home</title>
    <!--======= CSS link =======-->
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <!--======= HEADER =======-->
    <header class="header">
        <div class="header-container">
            <h2 class="header-title"><a href="main.php" class="header-title-link">G7 Social Space</a></h2>
        </div>
    </header>

    <!--======= HOME =======-->
    <section class="home">
        <div class="home-container">

            <div class="image-container">
                <img src="images/home.png" alt="" class="home-img">
            </div>

            <div class="home-data">
                <h2 class="home-data-title1">Hello, There</h2>
                <h2 class="home-data-title2">Connect &#38; Share with People Online</h2>
                <h2 class="home-data-title3">See What's Happening</h2>
                <p class="home-data-desc">Join <strong>G7 Social Space</strong> Today!</p>

                <form method="post" action="" class="home-form">
                    <button id="signup" name="signup" class="button">Sign Up</button>
                    <?php
					if(isset($_POST['signup'])){
						echo "<script>window.open('signup.php','_self')</script>";
					}
				    ?>
                    <button id="login" name="login" class="button">Login</button>
                    <?php
					if(isset($_POST['login'])){
						echo "<script>window.open('signin.php','_self')</script>";
					}
				    ?>
                </form>
            </div>

        </div>
    </section>

    <!--======= FOOTER =======-->
    <footer class="home-footer">
        <div class="footer-links">
            <a href="signup.php" class="footer-link">SignUp</a>
            <a href="signin.php" class="footer-link">Login</a>
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
            <a href="about.php" class="footer-link">About</a>
        </div>
        <div class="footer-rights">
            <a href="#" class="rights-link">@2022 <strong>Group 7 Social Space</strong></a>
        </div>
    </footer>

</body>
</html>