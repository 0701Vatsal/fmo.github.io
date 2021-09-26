<?php
include("signup.php");
error_reporting(0);
?>
<html>
<head>
<title>Jobseeker Registration </title>
	<link rel="stylesheet" type="text/css" href="css/maid.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/trial.js"></script>
    <meta charset="utf-8" name="viewport" content="width=device-width,initial-sclae=1.0">
    <link rel="stylesheet" href="http://localhost/project/style.css">
    <script type="text/javascript">
                    function con1f()
                      {
                          var con1f=confirm("By clicking ok your details will be stored in database and your details like contact number will be seen by Employers.");
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
    <header><h1>Find Maid Online Jobseeker's registration</h1></header>
<h4><b>Please fill following details:</h4></b>
<form>
<p> Enter Your Name: <input type="text" name="j_name" placeholder="Name" required></p>
<p> Enter Your Mobile Number: <input type="number" oninvalid="alert('Must contain 10 digit number');" pattern=".{10}" name="j_mobile" placeholder="10 digit Mobile NO" required></p>
<p> Enter Your Suitable jobtype: <input type="text" name="j_jobtype" placeholder="jobtype" required></p>
<p> Enter Your Address: <input type="text" name="Address" placeholder="Address" required></p>
<p> Enter Address where you want to work: <input type="text" name="Address1" placeholder="Enter Area and City" required></p>

<form><div class="button2">
<button type="submit" >Submit</button>
<button type="reset" value="Reset">Reset</button>
</div></form><br>
</form>
<iframe width="750" height="150" src="https://www.youtube.com/embed/wEi389jXkXk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen controls></iframe>

</body>
</html>
<?php
// PHP program to pop an alert
// message box on the screen

// Display the alert box
echo '<script>alert("After You Submit, our team will call jobseeker within 30 Mins for Validation")</script>';

?>


<?php
$na = $_GET['j_name'];
$cn = $_GET['j_mobile'];
$jt = $_GET['j_jobtype'];
$add = $_GET['Address'];
$add1 = $_GET['Address1'];


$query= "INSERT INTO jobseeker  VALUES('$na' , '$cn' , '$jt' , '$add' , '$add1')";
$data =mysqli_query($conn,$query);

if($data)
{
    //echo "Once you signup please go to login page and login.";
    
}
else
{
   // echo "Data failed to enter in database";
}
?>