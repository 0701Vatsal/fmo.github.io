 <!DOCTYPE html>
<html>
<head>
	<title>HOME-MAID4U</title>
	<link rel="stylesheet" type="text/css" href="css/maid.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/trial.js"></script>
    <meta charset="utf-8" name="viewport" content="width=device-width,initial-sclae=1.0">
    <script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
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
        <li><a href="home.php" id="header" class="b1">HOME</a></li>
        <li><a href="findhelper.php" id="header" class="b1">FIND HELPER</a></li> 
        <li><a href="aboutus.php" id="header" class="b1">ABOUT US</a></li>
        <li><a href="emp_login.php" id="header" class="b1" >LOGOUT</a></li>
        <!--<li><button type="button" class="btn-default" id="btnSignIn">SIGN IN</button></li>
        <li><button type="button" class="btn-default" id="btnSignUp">SIGN UP</button></li>
      </ul>
    
    <!--SIGN IN Modal option-->
  <div class="modal fade" id="modal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title"><i class="fas fa-user-friends"></i><b> SIGN IN</b></h2>
        </div>
        <div class="modal-body">
          <button type="button" class="btn btn-default btn-usertype " id="btnemployee1">EMPLOYER</button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 
  <!--Employee sign in modal-->
  <div class="modal fade" id="modal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <img src="resource/employerlogin.png">
        </div>
        <div class="modal-body">
          <form role="form" action="http://localhost/online-Maid-service-master/validation.php" method="post" id="login">
            <div class="form-group">
              <label for="usrname"><i class="fas fa-user"></i> Username</label>
              <input type="text" class="form-control" id="usrname" name="username" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" name="passwords" placeholder="Enter password">
            </div>
              <button type="submit" class="btn btn-info btn-block" name="login"><span class="glyphicon glyphicon-off"></span> LogIn</button>
          </form>
        </div>
        <div class="modal-footer">
      
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 

 

    <!--SIGN UP Modal option-->
  <div class="modal fade" id="modal4" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title"><i class="fas fa-user-friends"></i><b> SIGN UP</b></h2>
        </div>
        <div class="modal-body">
          <button type="button" class="btn btn-default btn-usertype " id="btnemployee2">EMPLOYER</button>
          <hr />
          <button type="button" class="btn btn-default btn-usertype" id="btnjobseeker2">JOBSEEKER</button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!--employer sign up modal-->
  <div class="modal fade" id="modal5" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <img src="resource/employersignup.png" id="imgemployersignup">
        </div>
        <div class="modal-body">
          <form role="form" action="php/Empreg.php"  method="POST" id="empreg">
            <div class="form-group">
              <label for="Name"><i class="far fa-id-badge"></i> NAME :</label>
              <input type="text" class="form-control"  name="uname" placeholder="Enter your name">
            </div>
            <div class="form-group">
              <label for="Phone"><i class="fas fa-phone-square"></i> MOBILE NO. :</label>
              <input type="tel" class="form-control"  name="pno" placeholder="Enter your mobile no.">
            </div>
            <div class="form-group">
            <label for="Phone"><i class="fas fa-map-marked-alt"></i> ADDRESS :</label>
            <textarea rows="4" cols="50" class="form-control" name="address" placeholder="Enter your address" ></textarea>
            </div>
            <div class="form-group">
              <label for="usrname"><i class="fas fa-user"></i> Username</label>
              <input type="text" class="form-control"  name="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control"  name="psw" placeholder="Enter password">
            </div>
                                                                                                        
              <button type="submit" class="btn btn-info btn-block" name="esubmit" id="esubmit"> <span class="glyphicon glyphicon-off"></span> SIGN UP</button>
          </form>
        </div>
        <div class="modal-footer">
      
          <p>Already a member? <a href="#">Sign In</a></p>
        
        </div>
      </div>
      
    </div>
  </div> 

  <!--jobseeker sign up modal-->
  <div class="modal fade" id="modal6" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <img src="resource/maidsignin.png" id="jobseekersignup">
        </div>
        <div class="modal-body">
          <form role="form" action="jsreg.php"  method="POST" id="jsreg">
            
            <div class="form-group">
              <label for="Name"><i class="far fa-id-badge"></i> NAME :</label>
              <input type="text" class="form-control" name="juname" id="juname" placeholder="Enter your name">
            </div>
            <div class="form-group">
              <label for="Phone"><i class="fas fa-phone-square"></i> MOBILE NO. :</label>
              <input type="tel" class="form-control" id="jpno" name="jpno" placeholder="Enter your mobile no.">
            </div>
            <div class="form-group">
            <label for="Phone"><i class="fas fa-map-marked-alt"></i> ADDRESS :</label>
            <textarea rows="4" cols="50" class="form-control" id="jaddress" name="jaddress" placeholder="Enter your address" ></textarea>
            </div>
            <div>
             <label for="sel2"><i class="fas fa-book-open"></i> TYPE OF JOB :</label>
              <input type="text" class="form-control" id="jobs" name="jobs" placeholder="Enter type of job.">
              </div>
            <div class="form-group">
              <label for="usrname"><i class="fas fa-user"></i> Username</label>
              <input type="text" class="form-control" id="jusrname" name="jusrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="jpsw" name="jpsw" placeholder="Enter password">
            </div>
           
              <button type="submit" class="btn btn-info btn-block" name="jsubmit" id="jsubmit"><span class="glyphicon glyphicon-off"></span> SIGN UP</button>
          </form>
        </div>
        <div class="modal-footer">
      
          <p>Already a member? <a href="#">Sign In</a></p>
        
        </div>
      </div>
      
    </div>
  </div> 


    </div>
  </nav>

  <div class="image-container">  
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="resource/slideshow1.jpg" alt="Los Angeles" style="width:100%;">
        </div>

        <div class="item">
          <img src="resource/slideshow1.png" alt="Chicago" style="width:100%;">
        </div>
      
        <div class="item">
          <img src="resource/slideshow2.jpg" alt="New york" style="width:100%;">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div> 

<div class="counter">
    <div class="row">
    <div class="column">
      <div class="card">
        <img src="resource/maid.png">
        <h3>3998</h3>
        <p>Total Helpers</p>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="resource/human.png">
        <h3>3088</h3>
        <p>Hired Helpers</p>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="resource/satisfied.png">
        <h3>2500+</h3>
        <p>Happy Clients</p>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="resource/recruitment.png">
        <h3>3000+</h3>
        <p>Jobs Created</p>
      </div>
    </div>
  </div>
  </div> 
  <h1 align="center"> ENTER YOUR REVIEW HERE</h1>
  <form action="customerreview1.php" align="center">
    <div class="button2"><button type="submit">Customer Review</button></div>
          </form>
  <footer>
    <div class="footer" id="foot" >
    &copy;COPYRIGHT BY FIND MAID ONLINE
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
