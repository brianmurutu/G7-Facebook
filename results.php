<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");

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
    <title>Results</title>
    
</head>
<body>
    <div class="row">
        <center><h2>What we Found!</h2></center>
        <?php results(); ?>
    </div>
</body>
</html>