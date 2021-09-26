<!DOCTYPE html>
  <html>
<head>
	<title>FIND HELEPER</title>
	<link rel="stylesheet" type="text/css" href="css/maid.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/trial.js"></script>
    <meta charset="utf-8" name="viewport" content="width=device-width,initial-sclae=1.0">
<style>
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
  <nav class="navbar headings" id="heading" >
    <div class="container">
      <div class="navbar-header">
        <img src="resource/hlogo2.png" alt="header logo" class="logo">
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.php" id="header">HOME</a></li>
        <li><a href="findhelper.php" id="header">FIND HELPER</a></li> 
        <li><a href="aboutus.php" id="header">ABOUT US</a></li>
        </ul>
    </div>
    <form action="alljs.php" align="right">
<div class="button2"><button type="submit">All jobseekers</button></div>
</form>
</nav>

<h4><b>ALL REGISTERED JOBSEEKERS<b></H4>
<form action=" " method="post" align="center">
<input type ="text" name="workaddress" placeholder="Enter place"><br><br>
<div class="button2"> <button type="submit" name="submit">submit</button></div>
</form>
<?php
error_reporting(0);
if (isset($_POST['submit'])) 
{
$res = $_POST['workaddress'];
$con = new mysqli('localhost','root','','maid_service');
$result = $con->query("select * from jobseeker where workaddress='$res'");
if($result->num_rows>0)
{
    while($row= mysqli_fetch_array($result))
    echo"<tr><td><b>NAME :</b>$row[0]<br /><b>MOBILE :</b>$row[1]<br/><b>TYPE OF JOB :</b>$row[2]<br /><b>ADDRESS :</b>$row[3]<br /><b>WORK ADDRESS :</b>$row[4]<br /> </td></tr><br>";
}
else
{
   echo " Sorry, We are not having any maid from that region now.... We will add them soon.";
}
}

//$query1= $conn->query("SELECT * FROM jobseeker where Address1='$res'");
?>  

<br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
    <div class="footer" id="foot" >
    &copy;2021 All rights reserved - Maid4u
    </div>
    <ul>
        <li><a href="https://facebook.com" data-tooltip="facebook"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
        <li><a href="https://gmail.com"><i class="far fa-envelope"></i></a></li>
        <li><a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a></li>
    </ul>
  </footer>
</body>
</html>

