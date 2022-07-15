<!DOCTYPE html>
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
    <title>Forgot Password</title>

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
                    <h3 style="text-align:center;"><strong>Forgot Password</strong></h3><hr>
                </div>
                <div class="l_pass">
                    <form action="" method="post">

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="email" type="email" class="form-control" name="email" placeholder="Enter Email" required>
                        </div><br>

                        <hr>
                        <pre class="text">Enter Bestfriend's Name Below</pre> <br>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <input id="msg" type="text" class="form-control" name="recovery_account" placeholder="Someone" required>
                        </div><br>

                        <a style="text-decoration:none; float:right; color:#187EAB;" data-toggle="tooltip" title="Signin" href="signin.php">Back to Signin</a><br><br>
                        <center><button id="signup" class="btn btn-info btn-lg" name="submit">Submit</button></center>

                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>

<?php
session_start();

include("includes/connection.php");

	if (isset($_POST['submit'])) {

		$email = htmlentities(mysqli_real_escape_string($con, $_POST['email']));
		$recovery_account = htmlentities(mysqli_real_escape_string($con, $_POST['recovery_account']));

		$select_user = "select * from users where user_email='$email' AND recovery_account='$recovery_account'";
		$query= mysqli_query($con, $select_user);
		$check_user = mysqli_num_rows($query);

		if($check_user == 1){
			$_SESSION['user_email'] = $email;

			echo"<script>window.open('change_password.php' , '_self')</script>";
		}else{
			echo"<script>alert('Your Email or Bestfriend's Name is Incorrect!' , '_self')</script>";
		}
	}
?>

