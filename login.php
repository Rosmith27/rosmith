 <?php

 
  
if(isset( $_GET['name'] ) && isset($_GET['pass']))
{
$connect = mysqli_connect("localhost","root","","rosmith",3312);
$name = $_GET['name'] ;

$pass = $_GET['pass'] ;

$data = mysqli_query($connect,"select name from ross where name = '$name' and pass = '$pass' ");		
	
$count = mysqli_fetch_assoc($data);	

if(sizeof($count) > 0 )
{
header('Location: http://localhost/x/id.html');
}
else
{
$errorMess = '<pre id = "red" >Sorry either your password or name was not right please try again !!</pre> ' ;
}	


}
?>
<!DOCTYPE html>
<html lang="en" ng-app  = "sportModule" >
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <style>
 .container-fluid {  background-image : url("ross1.jpg") ; background-size : 100% 100% ; min-height : 700px ;}
  #name {color : green; }
 #extend {  min-height : 200px ;  }
 #red { color : red ;}
 </style>
 
 
 

 
 
 </head>
 <body>
   
 
<div class = "container-fluid"  >
<div class = "col-xs-12" id = "extend" >
<div class = "col-xs-6 col-xs-push-4" id= "name" >


<h1>RoSmItH'sPaLaCe</h1>

</div>
<div class = "col-xs-6 col-xs-push-1" >
<img src = "ross2.png" height = "20%" width = "20%" />
</div>
</div>
<div class = "col-xs-6 col-xs-push-4" id ="box" >
<form action = "#">
<h3>Enter Your Name</h3>
<input type = "text" class = "form-control" name = "name" required />
<h3>Enter your Password </h3>
<input type = "text" class = "form-control" name = "pass" required /><br/>
<input type = "submit" class = "btn btn-danger" value = "Login" />
</form><br/><br/>
<?php if(isset( $_GET['name'] ) && isset($_GET['pass']))
{ echo $errorMess ;}  ?>
</div>
</div>
 </body>
 </html>