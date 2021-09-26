
          
          <?php
            include ("signup.php"); 
            error_reporting(0);
          ?>
          <html>
              <head>   
              <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Review</title>
                 <link rel="stylesheet" href="http://localhost/project/style.css">
                <script type="text/javascript">
                    function conf()
                      {
                          var con=confirm("By Clicking On OK Your Valuable Review Will Be Stored In Our Database.");
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
                

              <header><h1>Customer Reviews</h1></header>
              <h2 align="center">Your Review Should be within 50 Words</h2>
              
            <form align="center"><div>
            <textarea name="cust_review" placeholder="Enter Your Review Here" cols="30" rows="10"></textarea><br><br>
            <button type="submit"  name="Submit" onClick="conf()"/>Submit</button>
            <button type="reset" value="Clear" >Reset</button>
            <br></div>

            </form>
            <center><img src="http://localhost/online-Maid-service-master/customer.png"  alt="Customer Review image"></center>
            <br>
            <br>
            <hr>
            <a href="Home.php">Click here to go back on home page</a>
            
              </body>
               </html>
            <?php
                $cu= $_GET['cust_review'];
                $query= "INSERT INTO customerreview  VALUES('$cu')";
                $data =mysqli_query ($conn,$query);
                  
                if($data>0)
                {
                    echo "Data Inserted into database";
                    
                }
                else
                {
                    echo "Data failed to enter in database";
                }
?>