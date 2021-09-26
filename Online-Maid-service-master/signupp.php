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
    <title>Signup</title>
    <link rel="stylesheet" href="http://localhost/project/style.css">
    <script type="text/javascript">
                    function conf()
                      {
                          var con=confirm("YOU HAVE COMPLETED YOUR SIGNUP... WELCOME, PLEASE LOGIN");
                      }
</script>
 
    <style>
    #circle-btn { 
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

.btn-container {
  position: relative;  
}

button {
  border: 0;
  border-radius: 50px;
  color: white;
  background: #5f55af;
  padding: 15px 20px 16px 60px;
  text-transform: uppercase;
  background: linear-gradient(to right, #f72585 50%, #5f55af 50%);
  background-size: 200% 100%;
  background-position: right bottom;
  transition:all 2s ease;
}

svg {
  background: #f72585;
  padding: 8px;
  border-radius: 50%;
  position: absolute;
  left: 0;
  top: 0%;
}

button:hover {
   background-position: left bottom;
}
    </style>
</head>
<body>
   
        
<header><div class="container">
      <div class="navbar-header">
        <img src="download.png" alt="header logo" class="logo" height: 50px; width:50px;>
    
    <table>
<td><tr><div style="background-image: url('download.png' ); background-repeat:no-repeat;" ></tr>
<tr><h1>Welcome to Find Maid Online.</h1></tr></td></table></header>
<marquee>Welcome to signup page of FIND MAID ONLINE. Please signup if you are new user. If you are old user go to login page and login.</marquee>
    
    <a href="http://localhost/online-maid-service-master/emp_login.php">Login Once You Signup</a>
    <form> 
       
        <br>

        <p>Name: <input type="text" name= "name" required></p>
        <fieldset>
            <legend>Gender</legend>
            <p>
           Male <input type="radio" name="gender" id="male" required>
            Female <input type="radio" name="gender" id="female" required>
            </p>
        </fieldset>
        <p>Email: <input type="email" name="email" id="email" required></p>
        <p>Address: <textarea name="address" id="address" cols="20" rows="5"></textarea></p>
        <p>Password:<input type="password" name="password"  placeholder="Password" required>

        <p>Pincode: <input type="number" name="pincode" id="pincode" required></p>
        <p>Contact Number: <input type="number" oninvalid="alert('Must contain 10 digit number');" pattern=".{10}" name="contactnumber" id="contactnumber" required></p>
        <div class="button2">
        <button type="submit"  name="Submit" onClick="conf()"/>Sign up</button>
        
        <button type="reset" value="Reset">Reset</div>
        <br>
       
    </form>
    <br>
    <br>

    <footer>
            <a href="#">FAQ</a>
            <a href="#">Contact Us</a>
            <a href="#">&copy;2021 all rights reserved by Find Maid Online</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Refund Policy</a>
    </footer>

<!--
<form align="center"  method="get" action="http://localhost/online-Maid-service-master/signup1.php?">
<h2> If you are employer than please click on Employer button</h2>      
<div class="button1">
    
<button type="submit" onclick="http://localhost/online-Maid-service-master/signup1.php">EMPLOYER</button>
</form>
<h3>Employer means you want to hire jobseekers. You will be shared details of jobseekers who are willing to do job.</h3>
<hr>
<form align="center" method="get" action="http://localhost/online-Maid-service-master/signup2.php?"> 
    <h2> If you are jobseeker than please click on jobseeker button</h2>
<div class="button2">
<button type ="submit" onlick="http://localhost/online-Maid-service-master/login1.php">JOBSEEKER</button></div> </form>
<h3>Jobseeker means you are willing to do job and you want to register for job</h3>
</heade0r>-->
</body>
</html>

<?php
$na = $_GET['name'];
$ge = $_GET['gender'];
$em= $_GET['email'];
$add = $_GET['address'];
$ps = $_GET['password'];
$pc = $_GET['pincode'];
$cn = $_GET['contactnumber'];


$query= "INSERT INTO login  VALUES('$na' , '$ge' ,   '$em' , '$add','$ps','$pc', '$cn')";
$data =mysqli_query($conn,$query);

if($data)
{
    echo "Once you signup please go to login page and login.";
    
}
else
{
    echo "Data failed to enter in database";
}
?>