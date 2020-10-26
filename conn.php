<?php

session_start();

header('location:login.php');
$con = mysqli_connect('localhost','root','');

if($con){
  echo "succesful";
}
else{
  echo "no connection";
}

mysqli_select_db($con,'project');

$name = $_POST['name'];
$email = $_POST['email'];
$password =$_POST['password'];
$confirmpassword =$_POST['confirmpassword'];

$q = "select * from customers where name ='$name' && password= '$password'";
 $result = mysqli_query($con,$q);

 $num = mysqli_num_rows($result);

 if($num == 1){
   echo "dublicate data";
 }
 else{
    $query = "insert into customers(name,email,password,confirmpassword) values
               ('$name','$email','$password','$confirmpassword')";
    mysqli_query($con,$query);
 }

?>