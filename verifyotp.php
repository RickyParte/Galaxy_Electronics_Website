<?php
session_start();
include 'connection.php';
 $otp = $_POST['otp'];
$email=$_SESSION['EMAIL'];
 $result=mysqli_query($conn,"select OTP from otp where Email='$email' && OTP='$otp'");
 $count=mysqli_num_rows($result);
 if($count>0)
 {
    //  mysqli_query($con,"update otp set OTP='' where Email='$email'");
     $_SESSION['IS_LOGIN']=$email;
     echo "yes";
 }
 else{
     echo "not_exist";
 }
?>