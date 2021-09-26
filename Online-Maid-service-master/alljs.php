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
<body><table  class="table table-striped" >
   <tr>
      <th>JOBSEEKERS</th>
      
    </tr>
<?php
   include ("Connection.php"); 


   $qury = "select * from jobseeker";
   $result = mysqli_query($conn,$qury);
   while($row= mysqli_fetch_array($result))
   echo"<tr><td><b>NAME :</b>$row[0]<br /><b>MOBILE :</b>$row[1]<br/><b>TYPE OF JOB :</b>$row[2]<br /><b>ADDRESS :</b>$row[3]<br /><b>WORK ADDRESS :</b>$row[4]<br /> </td></tr>";
 ?>
</table>
