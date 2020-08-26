<?php
include 'connection.php';
if(isset($_POST['submit']))
{
$type=$_POST['q'];
$fees=$_POST['p'];
$PRICE=$_POST['pp'];
$d=$_POST['DATE'];
$r=$_POST['pic'];
$ay="INSERT INTO tournament(type,entryfee,prize,playdate,image)VALUES('$type','$fees','$PRICE','$d','$r')";
if(mysqli_query($conn,$ay))
{
 header('Location: WELCOME.php');
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PUBG TOURNAMENT</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
	.b
  	 {
  	 	font-size: 50px;
  	 	font-style:italic;
  	 	font-style:bold;
  	 	font-family: algerian;
  	 	color: white;
  	 }
  	 .navbar
  	 {
  	 	background-color: blue;
  	 }
  	 .gfg { 
                text-align:left; 
                font-size:40px; 
                font-weight:bold; 
                color:green; 
            } 
            h1
            {
            	font-size: 50px;
            	text-align: center;
            }
            body
            {
            	background-color: hotpink;
            }
</style>

</head>
<body>
<div class="jumbotron" style="background-color: black">
 <marquee scrolldelay="30" truespeed="30"><div class="b"> PUBG TOURNAMENT</div></marquee>
</div>

<div class="appy">
  
</div>
<form method="post">
<div>
  <h1>ADD GAME FOR TOURNAMENT</h1>
  <table align="center">

    <tr>
      <td>GAME TYPE</td>
      <td><input type="text" name="q"></td>
    </tr>
    <tr>
      <td>
        ENTRY FEE
      </td>
    
      <td>
        <input type="number" name="p">
      </td>
</tr>
<tr>
      <td>
        PRIZE
      </td>
    
      <td>
        <input type="number" name="pp">
      </td>
    </tr>
    <tr>
      <td>
        DATE
      </td>
    
      <td>
        <input type="datetime" name="DATE">
      </td>
    </tr>
    <tr>
      <td>
        PICTURE
      </td>
    
      <td>
        <input type="file" name="pic">
      </td>
    </tr>
    <tr>
      <td>
        <input type="submit" name="submit" value="add game">
      </td>
    </tr>
  </table>
</div>
</form>
</body>
</html>