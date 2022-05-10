<?php
error_reporting(0);
session_start();
// include ('createotp.php');
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/Exception.php';
    require 'phpmailer/SMTP.php';
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
        
    // if(isset('send'))
    // {
        include 'connection.php';
        $email = $_POST['email'];
    
        $result=mysqli_query($conn,"select * from otp where Email='$email'");
        $count=mysqli_num_rows($result);
        if($count>0)
        {
            $_SESSION['EMAIL']=$email;
            $otp=rand(100000,999999);
            
            mysqli_query($conn,"update otp set OTP='$otp' where Email='$email'");
            $body="Your OTP is  ".$otp;
            mailsend($email,'OTP Verification',$body);
            echo "yes";
        }
        else{
            echo "not_exist";
        }
       
    
   
   
   function mailsend($to,$subject,$msg)
   {
    try{
    
    
        $mail=new PHPMailer;                  
        $mail->isSMTP();  
        $mail->Host="smtp.gmail.com";
        $mail->SMTPAuth=true;
        $mail->Username="ur@gmail.com";
        $mail->Password="ur";
        $mail->SMTPSecure='tls';
        $mail->Port=587;
    
     
       
        $mail->setFrom("ur@gmail.com",'Verification Team');
        $mail->addAddress($to);
        $mail->addReplyTo("ur@gmail.com");
        
            
        $mail->isHTML(true);                                 
        $mail->Subject = $subject;
        $mail->Body    = $msg;
        $mail->AltBody = 'Please Dont Share OTP with anyone it is harm for you.';
        
    
        if($mail->send())
        {
           return 1; 
        }
        else{
           return 0;
        }
        
    }
    catch (Exception $e){
    echo $e;
    }
        
   }
	    
       
     
    
// }    



?>
