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
    <title>Login page for EMPLOYER</title>
    <link rel="stylesheet" href="http://localhost/project/style.css">
</head>
<body>
<header>
   <h1> FIND MAID ONLINE</h1>
</header>
<marquee> If You are new user please <a= href="http://localhost/online-Maid-service-master/signupp.php" target="_blank" style="color: chartreuse;" style="float: right;">SignUp</a>
</marquee><hr>
<div style="background-image: url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxASDxAREBAPERMREA8OEhMPDxAQEBETFhEWFxYVExUkHSggGCYlGxUVIj0hMSkrLi4vFx8zODMuNygtLisBCgoKDg0OGxAQGjElICYyKy0uLS8tLS0tLS0tLS0rLS8tLy0tLS0tLS8tLS0tLS0tLS0tLS0tLS0tListNS0rLf/AABEIAIgBcgMBEQACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABAUDBgcBAgj/xAA+EAACAgECAwQIBAMFCQAAAAAAAQIDEQQSBSExBhNBUQciUmFxgZGhFCMyQoKSsTNDYqKyJHKDwcLD0eHx/8QAGgEBAAMBAQEAAAAAAAAAAAAAAAMEBQECBv/EACwRAQACAgEDAQYHAQEAAAAAAAABAgMRBBIhMQUTIjJBUXEjM2GBkbHBoRT/2gAMAwEAAhEDEQA/AO0gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA2Bj7wD3vAPO8A+oTyB9AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAja6zEV72BEV4Hv4gDx6gD702o9dLz5AWIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAK/jSfdqXsyWfg+X9cAUv4gD38SB8vUgZ+GWOV0EvDMn8Ev8A4BsgAABTdquPx0Wn75w7xucYRgpbXLPN88Pok308vM9VrNp1Dza0V8qfhfpH0Vq9aOoqfR7qu8j9YZ+6R2cdvo57Sv1bHoOM6W7+x1FNj9mNkdy+Meq+h4e04AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHxdWpRcX0kmmBpXEK50zcJfGL8JLzQER6v3geV3ylJRgnKT6KKbf0A3DgXDnVFyn/aT6rrtXs5AtAAADlHpF43bLiEK6YqcdNHa01lOyWHJ/JbV8UyzhrMRtWzTE9kWHAlKEtRY51uaztqkoZfu5osxEfJUta3iWPsnwmWp4jVGxTlClvUSdst8sQa2rPhmbjy8kyvnnUaWsERPeHZSqtIl2tUb6qFHLshba3nChCG1ZfnmU4r6+QEsAAAAAAAABDlr/8Aao6dRz+RLUSlu/Su8jCMceO7M/5GBMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAVXH6YWQjFrL3ZTXVeYGvT4Dnp92BfcJlXTUoSjGtrk2o/r97fiBKs4vRH96fwTAxPi8XjZtef8SyBkq1096hKmazz3JZgl75dF8AI3Ge0uk09dkp30OcYSlGpWwdk5JPEVHOeb5AcZ0/GoyulNt7pNybk9snJvLfl1yX8eWmtKOTFbe286W7vdJ673eCWfWR6rGrIsk7jst/RxwuNens1GMPUzzF+PcwyofV7pfxIp5r9V5lew06aREtuIkqm4Y+81ust54q7nRQ8sxj3tjXztiv4ALkCPrtbXTXKy6ahCOMt+beEkurbfLC5sCtj2krzFzo1ldcpRgrbtNOuvdJ4juz60E20suKXPqBL1/GdNTJQttjGbWdiUpzx5uMU2iWmG943EIb8jHSdWnuyyn31DdVsq+8h6lsYrdHPSSjOLXyaI7Vms6lJW0WjcJMpJJttJJZbbSSXm2cekThvFdPqFN6e6u5Vy2TdclJRlhPGfg0wJgFPweSs1OtuS6Ww0cX5xpgpNL/AIltn0AuAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHNtdxGWm4hqU8uDtbcfLd62Y/zGp7CM2GJjyx//TOHkWrPja403F4yxz6817zMmJidS14mJjcLOWLIOL5po46j8P7KVTjusutk+jjHbDa/J9QIPZCpO7Vyx6lWpt09O7m9teE235uWT3esRpHjtNtvviPY1auxz1mqvkukaqGqqVHLxlNScn5vkeEjX+2HYHS06aV2l7yLqw5xlPfGUc4b59Gs58uoHNpxecSSeOXrNfZnRM4ZK5SUa53QhJqM9ickot4k0nyylksY8Wa3asSq5c+Cve0w/QHB9Zp7KorTSi4QjGCiuThFLCTj1XJEWTFfHOrRpLiz48sbpO04jSte0vA9XT3kaddBQnddf+do1ZYpW2OclvU4p835dMAS4aLWrrra5P36OO35pWJ/cDFxThd87NNfCdMrdPGxOu6E1p5uaXrwSk3XJYwpetylJeOQPNTodZqIOu+enpqnysjp42W2TjlZirJYUc9M7W+fLHUD54todGrZ2XaiVLtjGNkFqFVG1RWFlfq6eTRZx3ydMRWu9fop5ceHqm1ra357oXC9PK7RS09c01RroQUpN86a9RXbjz/RyOcmPei31jbvDn3Jr9JmP2+S2s4dO62ctVtlTGX5NCy65Y/vL/beekei683zVdbfPA9FOu7Xzmsd9q1OHTDrjpqYRx/K/owLcCLw6ElBudUKpSnZOUa5b025PEt2FltJPp4gSgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHMO3lW3XTft11T/y7f+g2eFO8TB9QrrMi8Je6GPFN4KPNjWWWjwJ3hhsXCdfh7ZvDX3Ki6vquK1x6Sw/HHiBh0l1MIuNSUU5TsfvlOTlJv4ttnZmZ8uRER4fVvE4xTlKSSXNttJL4s5EbJnTS+03aiGphLT0tuDeLJJ4Ul7K80/M0uJxItO7svm82aRrH/LXtPoa49Ix+mX9TXpgx18Qw8nJy38ylJJE/aFedyy0amVclKDlGS6Si2mjzeK3jVo3D1Sb0nqrOpdP7N8Seo01dkv1c4Tx7UXjPz5P5nzPKxRiyzWPD63h5pzYotPn5rQrrQAAoONan/aYVXXS0+nlXuUoy7vvbN2HXK39mFh4TTeepaxV9ybVjc/1+ynnv+JFbzqv9z9Nssr9BpYboKnc/0qrbO62Xgl1lJvzPMVy5J1O/8dm2DFG41/spHANJOupu1JW3WT1FiXNRlN/p+SUV8jzmtFrar4jsk49JrXdvM95WRCnAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA0D0mUYs09ntQnW/4Wmv9TNLgW7TDJ9Sp3rZQ8Blzkv8X/L/ANEfPj34lL6bP4cx+rY5aVSXNFFosa0215UU8c0pLKfuaA1m/g/EXObq1DUG24qVkoy5+GMNLBZrkxa7wqWx5d9pazr6tT3qrvdsptpRU5uSeX+15wWqTTW4U7xk6umyy0/DJ0PdKUZJrEks/Ln4kvE5EWv0wi5vGtXH1SlfiF4RNPqY/S+HqGc6neljlaxt3TpHo0nnSWLyvl94QMT1D839n0Hpn5U/dtpQaQAA+ZwUk1JJp9U0mn8UdiZjw5MRPlh0+gpg8101QfnCuEX9Ujs3tPmXmuOle8RCQeXsAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABV9o+ELVaeVfJSXr1yf7Zrpn3PmvmS4cs477Q8jDGWk1cv4ZurtnCacZReJJ9U02mi5ztWrW0KPp+62tSW1afUrBnNRI76PmgMV2qgvFAVmvqhPa2k3F5i8c0/NHYmYcmIlVcUj+U/c4/1RZ4U6zQp8+N4JUu43tvnNPnec27p45jbvS6T6LpZ01/uv/7cTH9Q+OPs3PTPy5+7cyg0gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGh+kbszZZjVaZS7yOO8jXndJJYU4pdXjk15Y8i3gyRMezv4UeTitWfaU8/NoujXEJvbX3830xGnc18fVLM8fFHeZ/6qxys09oif4fWv/FVTdd9lsJpJuOYqSysrOOnJokpx8MxuEd+TnidT2RdHqJq2Ljvk5NQe6TllN4wcyYqTWY0Ys2SLRMy3zi3C3prtmZOuUU4Sl4+0vk/s0ZDcYbuHb9Jq7n+mup7ffPKf2X9SfjTrLVW5cbw2aLKw3Zl89FXiUn8Pe8HO8u9oFHzl9ENG1xwftLfpa510OMVOSm5SipSTSxy8F9CHLgpkndk2LkZMcTFW6ejrjWp1M9T39jsUY1OOVFbW3LOMLyRQ5mKlIjpjTS4OXJebdU7buUWiAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABonFvSC4ylHT0p4bW+5vweP0L/yaeP0/cbvLJy+p6mYpH8tY1/bTX2Z/PcF5VRjD79fuTxxcVfkrTzM1vnr7NflqJSk3OTlJvLcm22/NvxJo1rSCd72suzmk7zW6aHnfW38Iy3P7RZHmnpxzKbDHVkrDtl9MJrE4xkuuJRUlkw30Cv7RUr8BqoRSS/DXJJJJL1H0RJhnWSPuizxvHaP0cJbyzcme75+I7MrketvGnmQ68ODqnos0e3R2Wv++ueP92C2/wCreZXNtu+vo2PT6ax7+rcymvgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAcx9IXBu6v76C9S/LeOkbP3L59fqbPBzddOifMMH1DB7O/XHif7adOstzClFmJ1Hnpe4u230daCyesrtUXsqU5Slj1U3BxSz5+t9irzLxGPXzlc4NJnLvXaHVzHbiNxKG6i6PtVWR+sGeqfFDzf4Zfnyvr8jdjy+d+TKenl5KRwT+HcF1Wox3FFk0/3bXGv473yIrZqV8ympgyX8Q7XwTQLT6amhY/LrjFtdHLrJ/OTbMfJfrtNm5ip0UiqceEgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEXifD676pVWrMXh8nhpro0/BkmPJbHbqqjy4q5a9NvDXq+wOkTy5Xy926KX2iW59Qyz9FGvpmKPMytNH2Y0VXOOnrbXjYnY/wDNnBXvyctvNlmnEw08VW0YpLCSSXglhEG9rEREeHodeNAcu13o81bvlGp0qnc3Cc5tYj4JxSbyjUjm06Y35ZE8DJ1TrwtOH+jOpYeo1Flj9mqKrj9Xl/0IL820/DCenp9Y+Kdtn4d2Y0VGHVpqty/dNd5P+aWWivbNe3mVqmDHTxC3IkwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAf/9k=' ); background-repeat:no-repeat;" align="center">
  	<h3 class="center" align="center">Login</h3>


    <p class="login-box-msg" align="center">Sign in to start your session</p> 
    <form action="" method="post" align="center">

        <input type="email" name="email"  placeholder="Email" required><br>
        <input type="password" name="password"  placeholder="Password" required>

<br>
    
          <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
    </form>

  <br>


</body>
</html>




<?php 

if (isset($_POST['login'])) 
{
	$user = $_POST['email'];
    $pass = $_POST['password'];
    $con = new mysqli('localhost','root','','maid_service');  

    $result = $con->query("select * from login where email='$user' AND password='$pass'");
    
    if($result->num_rows>0)
    {	
    	$data = $result->fetch_assoc();
    	$_SESSION['user']=$data['id'];
      $_SESSION['pass'] = array();
    	header('location:http://localhost/online-Maid-service-master/');
      }
    else
    {
     	echo "Invalid email or password.Please sign up if you are new user.";
     
    }
}
  
 ?>