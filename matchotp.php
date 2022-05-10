<?php
session_start();
include 'connection.php';
 $otp = $_POST['otp'];
$email=$_SESSION['EMAIL1'];
 $result=mysqli_query($conn,"select otp from forgot where email='$email' && otp='$otp'");
 $count=mysqli_num_rows($result);
 if($count>0)
 {
    //  mysqli_query($con,"update otp set OTP='' where Email='$email'");
     $_SESSION['IS_LOGIN1']=$email;
     echo "yes";
 }
 else{
     echo "not_exist";
 }
?>