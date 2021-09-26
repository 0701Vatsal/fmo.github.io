<?php
include("signup.php");
error_reporting(0);
?>
<?php
if (isset($_POST['findhelper'])) 
{

   	$user = $_POST['place'];
    $con = new mysqli('localhost','root','','maid_service');

    $result = $con->query("select * from jobseeker where place='$user'");
    if($result->num_rows>0)
    {
      echo"<tr><td><b>NAME :</b>$row[0]<br /><b>MOBILE :</b>$row[1]<br/><b>TYPE OF JOB :</b>$row[3]<br /><b>ADDRESS :</b>$row[2]<br /> </td></tr>";
    }
}
?>