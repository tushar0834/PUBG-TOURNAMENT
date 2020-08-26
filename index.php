<?php
include('connection.php');
if(isset($_POST['sign']))
{
  $a=$_POST['username'];
  $b=$_POST['password'];
  $sql="SELECT email,password FROM user where email='".$a."' AND password='".$b."'";
  
  $result=mysqli_query($conn,$sql);
  if($result)
  {
    header('Location: welcome.php');
  }
}
if(isset($_POST['submit']))
{
  $a=$_POST['username'];
  $b=$_POST['email'];
  $c=$_POST['password'];
  $c1=$_POST['password2'];
  $r1=$_POST['number'];
  $as=$_POST['pid'];
  $l=$_POST['location'];
  if($c==$c1)
  {
$sql="INSERT into user(username,email,password,Location,Mobile,pubgid)VALUES('".$a."','".$b."','".$c."','".$l."','".$r1."','".$as."')";

  $f=mysqli_query($conn,$sql);
  if(!$f)
  {
    echo mysqli_error($conn);
  }
  else
  {
    header('Location: welcome.php');
  }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pubg Tournament</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style type="text/css">
  	body
  	{
  		background-image: url("abc.jpg");
  		background-repeat: no-repeat;
  		background-size: 130% 200%;

  		
  	}
    h1
    {
      font-size: 50px;
      font-color:black;
      font-style: bold;
    }
  	.a
  	{
  		font-size:30px;
  	}
    .container-fluid {padding:50px;}
.container{padding:50px;   }
#title{font-family: 'Lobster', cursive;;}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */


/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
  </style>
</head>
<body>


<div class="jumbotron jumbotron-fluid" style="background-color: skyblue;opacity: 0.8;">

  <div class="container" >
   <h1>Welcome to pubg tournament</h1>
    
  </div>
</div></marquee><br>

<br>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="1.jpg" style="width:100%">

</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="2.jpg" style="width:100%">
 
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="3.jpg" style="width:100%">
  
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="4.jpg" style="width:100%">
  
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<div class="container-fluid">
    <div class="container" style="background-color: skyblue">
      
      <div class="row">
        <div class="col-md-5">
          <form method="POST">
            <fieldset>              
              <p class="text-uppercase pull-center"> SIGN UP.</p> 
              <div class="form-group">
                <input type="text" name="username" id="username" class="form-control input-lg" placeholder="username">
              </div>

              <div class="form-group">
                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
              </div>
                <div class="form-group">
                <input type="password" name="password2" id="password2" class="form-control input-lg" placeholder="Password2">
              </div>
              <div class="form-group">
                <input type="text" name="pid" id="pid" class="form-control input-lg" placeholder="pubgid">
              </div>
              <div class="form-group">
                <input type="number" name="number" id="number" class="form-control input-lg" placeholder="Mobile Number">
              </div>
              <div class="form-group">
                <input type="text" name="location" id="location" class="form-control input-lg" placeholder="Location">
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input">
                  By Clicking register you're agree to our policy & terms
                </label>
                </div>
              <div>
                    <input type="submit" class="btn btn-lg btn-primary" value="Register" name="submit">
              </div>
            </fieldset>
          </form>
        </div>
        
        <div class="col-md-2">
          <!-------null------>
        </div>
        
        <div class="col-md-5">
            <form role="form" method="POST">
            <fieldset>              
              <p class="text-uppercase"> Login using your account: </p> 
                
              <div class="form-group">
                <input type="email" name="username" id="username" class="form-control input-lg" placeholder="useremail">
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
              </div>
              <div>
                <input type="submit" class="btn btn-md" name="sign">
              </div>
                 
            </fieldset>
        </form> 
        </div>
      </div>
    </div>
<br>


</body>
</html>


