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
            h2
            {
              text-align: center;
              color: pink;
            }
</style>

</head>
<body>
<div class="jumbotron" style="background-color: black">
 <marquee scrolldelay="30" truespeed="30"><div class="b"></div></marquee>

</div>
<a href="del.php"><h1 align="center">DELETE USER</h1></a>
	<a href="add.php"><h1>add GAME</h1></a>
  <h1>
    GAMES
  </h1>
  <table class="table" border="2">
    <tr>
      <th>TYPE</th>
      <th>ENTRY FEES</th>
      <th>IMAGE</th>
    </tr>
  <?php
  include 'connection.php';
  $ssq="SELECT * from tournament";
  $c=mysqli_query($conn,$ssq);

while($row=mysqli_fetch_array($c,MYSQLI_ASSOC))
{

?>
<tr>
  <td><?php echo $row['type'] ?></td>
  <td><?php echo $row['entryfee'] ?></td>
  <td><?php 
echo "<img src='",$row['image'],"'/>","<br>";
?></td></tr>
<?php }?></table>
<h1 align="center">REGISTERED USERS</h1>


  <h1>
    GAMES
  </h1>
  <table class="table" border="2">
    <h2>SOLO</h2>
    <tr>
      <th>TYPE</th>
      <th>ENTRY FEES</th>
      <th>IMAGE</th>
    </tr>
  <?php
$sql="SELECT * FROM SOLO";


$result=mysqli_query($conn,$sql);
while($row1=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
 ?>


<tr>
  <td><?php echo $row1['type'] ?></td>
  <td><?php echo $row1['entryfee'] ?></td>
  <td><?php 
echo "<img src='",$row1['image'],"'/>","<br>";
?></td></tr>
<?php 
}
  ?>

</table>
 <table class="table" border="2">
  <h2>DUO</h2>
    <tr>
      <th>TYPE</th>
      <th>ENTRY FEES</th>
      <th>IMAGE</th>
    </tr>
    <?php 
$sq="SELECT * FROM DUO";
$result1=mysqli_query($conn,$sq);
while($row2=mysqli_fetch_array($result1,MYSQLI_ASSOC))
{
  ?>
  <tr>
  <td><?php echo $row2['type'] ?></td>
  <td><?php echo $row2['entryfee'] ?></td>
  <td><?php 
echo "<img src='",$row2['image'],"'/>","<br>";
?></td></tr>
<?php 
}
?>
</table>
<table class="table" border="2">
  <h2>SQUAD</h2>
    <tr>
      <th>TYPE</th>
      <th>ENTRY FEES</th>
      <th>IMAGE</th>
    </tr>
    <?php
$s="SELECT * FROM SQUAD";
$result2=mysqli_query($conn,$s);
while($row3=mysqli_fetch_array($result2,MYSQLI_ASSOC))
{
 
?>
<tr>
  <td><?php echo $row3['type'] ?></td>
  <td><?php echo $row3['entryfee'] ?></td>
  <td><?php 
echo "<img src='",$row3['image'],"'/>","<br>";
?></td></tr>
<?php 
}
?>

</body>
</html>