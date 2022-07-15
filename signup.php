<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G7 Social Space | SignUp</title>
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

    <!--======= SIGNUP =======-->
    <div class="signup-container">
        <div class="signup-title">
            <h3 class="signup-title-name">G7 Social Space | Sign Up</h3>
        </div>

        <form action="" method="post" class="signup-form">

            <div class="signup-inputbox">
                <i class='bx bx-user'></i>
                <input type="text" name="first_name" placeholder="First Name" required class="sign-input">
            </div>

            <div class="signup-inputbox">
                <i class='bx bx-user'></i>
                <input type="text" name="last_name" placeholder="Last Name" required class="sign-input">
            </div>

            <div class="signup-inputbox">
                <i class='bx bx-lock-alt' ></i>
                <input type="password" id="password" name="u_pass" placeholder="Password" required class="sign-input">
            </div>

            <div class="signup-inputbox">
                <i class='bx bx-envelope'></i>
                <input type="email" id="email" name="u_email" placeholder="Email" required class="sign-input">
            </div>

            <div class="signup-inputbox">
                <i class='bx bx-current-location'></i>
                <select name="u_country" required="required" class="signup-select">
                    <option disabled>Select your Country</option>
                    <option>Kenya</option>
                    <option>Uganda</option>
                    <option>Tanzania</option>
                    <option>Rwanda</option>
                    <option>South Sudan</option>
                    <option>Congo</option>
                    <option>Burundi</option>
                </select>
            </div>

            <div class="signup-inputbox">
                <i class='bx bx-user'></i>
                <select name="u_gender" required="required" class="signup-select">
                    <option disabled>Select your Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>

            <div class="signup-inputbox">
                <i class='bx bx-calendar'></i>
                <input type="date" name="u_birthday"  required class="sign-input">
            </div>

            <div class="signup-button-container">
                <button id="signup" class="button sign-button" name="sign_up">SignUp</button>
                
                <a href="signin.php" class="signup-link" title="Click here to Sign In!">Already have an account?</a>
                
            </div>

            <?php include("insert_user.php"); ?>

        </form>
    </div>

    <!--======= FOOTER =======-->
    <footer class="home-footer">
        <div class="footer-links">
            <a href="main.php" class="footer-link">HOME</a>
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