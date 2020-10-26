<?php

session_start();

$con = mysqli_connect('localhost','root','');

if($con){
  echo "succesful";
}
else{
  echo "no connection";
}

mysqli_select_db($con,'project');

$name = $_POST['name'];
$password =$_POST['password'];


 $q = "select * from customers where name ='$name' && password= '$password'";
 $result = mysqli_query($con,$q);

 $num = mysqli_num_rows($result);

 if($num == 1){
   
  $_SESSION['name']=$name;
  header('location:createorders.php');
 
 }
 else{
  
   header('location:login.php');
   
 }

?>