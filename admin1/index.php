<?php

include('connection.php');
if(isset($_POST['sign']))
{
    $a=$_POST['username'];
    $b=$_POST['password'];
    $sql="SELECT name,password FROM admin where name='".$a."' AND password='".$b."'";
    
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header('Location: welcome.php');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>PUBG-TOURNAMENT</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
     .a
     {
        font-size: 50px;
        font-style:italic;
        font-family: algerian;
        color: green;
     }
     .b
     {
        font-size: 50px;
        font-style:italic;
        font-family: algerian;
        color: red;
     }
     body
     {
        background-image: url("a.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        opacity: 0.75;
     }
    
.container-fluid {padding:50px;}
.container{background-color:white;padding:50px;   }
#title{font-family: 'Lobster', cursive;;}
body{
    background-color: lightgreen;
}
     </style>
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            
            <div class="row">
                       <form role="form" method="POST">
                        <fieldset>                          
                            <p class="text-uppercase"> Login using your account: </p>   
                                
                            <div class="form-group">
                                <input type="text" name="username" id="username" class="form-control input-lg" placeholder="name">
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
</body>
</html>
