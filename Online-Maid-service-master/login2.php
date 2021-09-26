<?php
include("signup.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="http://localhost/project/style.css">

</head>
<body>
<header>Welcome to Find Maid Online.</header>
<marquee> Please signup if you are new user.</marquee>
<form align="center">
    <h4> If you are employer than please click on Employer button</h4>
<button type="button" id="Employeer" >EMPLOYER</button></form>
<hr>
<form align="center" method="get" action="http://localhost/online-Maid-service-master/emp_login.php"> 
<h4> If you are jobseeker than please click on jobseeker buttion</h4>
<button type="submit" id="jobseeker" onclick="http://localhost/online-Maid-service-master/login.php">JOBSEEKER</button></form>
</body>
</html>