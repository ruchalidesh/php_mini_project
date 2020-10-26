<!-- <?php

// $name="";
// $email="";
// $errors=array();


// $servername='localhost';
// $user='root';
// $password='';
// $dbname='project';
$con=mysqli_connect('localhost','root','','project');

// register button
if(isset($_POST['register'])){
  session_start();
  $name=mysql_real_escape_string($_POST['name']);
  $email=mysql_real_escape_string($_POST['email']);
  $password=mysql_real_escape_string($_POST['password']);
  $confirmpassword=mysql_real_escape_string($_POST['confirmpassword']);

  // if(empty($name))
  // {
  //   array_push($errors,"name is required");
  // }
  // if(empty($email))
  // {
  //   array_push($errors,"email is required");
  // }
  // if(empty($password))
  // {
  //   array_push($errors,"password is required");
  // }
  if($password == $confirmpassword){
   
    $password = md5($confirmpassword);//encrypt pass before storing in database
    $sql = "INSERT INTO CUSTOMERS (name,email,password,confirmpassword) 
               VALUES ('$name','$email','$password','$confirmpassword')";
    mysqli_query($con ,$sql); 
    $_SESSION['message']="you are now logged in"; 
    $_SESSION['name']= $name;  
    header("location: home.php");//redirect to main page after login       
  }else{
    // array_push($errors,"passwords do not match");
    $_SESSION['message']="the two password do not match";
  }
}

?> -->