<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
  
<body>
<form action="" method="post">
  <input type="text" name="email">
  <input type="text" name="mobile">
  <button name="reset">Reset</button>
</form>
  
</body>
</html>
<?php
session_start();
include 'connection.php';
if(isset($_POST['reset']))
{

  //get data from input box
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];

  //get data from database register table
  $query="select * from register where email='$email' && mobile='$mobile'";
  $run=mysqli_query($conn,$query);


  //retrieve all data where email and mobile number is entered in input
  $row=mysqli_fetch_array($run);

  //check input data and database data is matched or not
  if($email==$row['email'] && $mobile==$row['mobile'])
  {
    // if done then ur location where you want to ghalavaycha ahe 
    header("Location: UserForgotPassword.php");
  }
  else{
    //else wrong data provided
    echo "Wrong Email";
  }
}

?>