<?php

$name = $_GET['name'] ;
$pass = $_GET['pass'] ;
$sq = $_GET['sq'] ;
$connect = mysqli_connect("localhost","root","","rosmith",3312);


mysqli_query($connect,"create table ross ( name varchar(255) , pass varchar(255) , sq varchar(255)  ) ;");	
mysqli_query($connect,"insert into ross (name , pass , sq ) values ('$name','$pass','$sq') ; " ) ;
header('Location: http://localhost/x/id.html');

?>