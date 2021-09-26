<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname  = "maid_service";

 $conn = mysqli_connect($servername , $username , $password ,  $dbname);


 
 if($conn)
 {
      //echo  "OK";
 }
 else
 {
     echo "Connection Failed" .mysqli_connect_error();
 }
 ?>