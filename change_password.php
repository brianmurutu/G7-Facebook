<!DOCTYPE html>
<?php
session_start();
include("includes/connection.php");

if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--======= Bootstrap link =======-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--======= CSS link =======-->
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/home_style2.css">
    <title>Change Password</title>

    <style>
    body{
        overflow-x: hidden;
    }
    .main-content{
        width: 50%;
        height: 40%;
        margin: 10px auto;
        background-color: #fff;
        border: 2px solid #e6e6e6;
        padding: 40px 50px;
    }
    .header{
        border: .5 solid #000;
        margin-bottom: 5px;
    }
    .well{
        background-color: hsl(242, 100%, 30%);
    }
    #signup{
        width: 60%;
        border-radius: 30px;
    }
    </style>
    
</head>
<body>
    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                <center><h1 style="color:hsl(0, 0%, 83%);;"><strong>MySpace</strong></h1></center>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="main-content">
                <div class="header">
                    <h3 style="text-align:center;"><strong>Change Password</strong></h3><br>
                </div>
                <div class="l_pass">
                    <form action="" method="post">

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="pass" placeholder="Enter New Password" required>
                        </div><br>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="pass1" placeholder="Re-enter New Passowrd" required>
                        </div><br>

                        <center><button id="signup" class="btn btn-info btn-lg" name="change">Change Password</button></center>

                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>

<?php
    if(isset($_POST['change'])){

        $user = $_SESSION['user_email'];
        $get_user = "select * from users where user_email='$user'";
        $run_user = mysqli_query($con, $get_user);
        $row = mysqli_fetch_array($run_user);

        $user_id = $row['user_id'];
        
        $pass = htmlentities(mysqli_real_escape_string($con, $_POST['pass']));
        $pass1 = htmlentities(mysqli_real_escape_string($con, $_POST['pass1']));

        if($pass == $pass1){
            if(strlen($pass) >= 6 && strlen($pass) <= 60){
                $update = "update users set user_pass='$pass' where user_id='$user_id'";

                $run = mysqli_query($con, $update);
                echo"<script>alert('Your Password has been changed a moment ago!')</script>";
                echo"<script>window.open('home.php' , '_self')</script>";

            }
            else{
                echo"<script>alert('Your Password should be greater than 6 characters')</script>";
            }
        }
            else{
                echo"<script>alert('Your Password did not match')</script>";
                echo"<script>window.open('change_password.php' , '_self')</script>";
            }
    }
?>