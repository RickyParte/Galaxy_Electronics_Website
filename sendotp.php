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
        $con=mysqli_connect("localhost","root","","galaxyelectronic");
        $email = $_POST['email'];
    
        $result=mysqli_query($con,"select * from otp where Email='$email'");
        $count=mysqli_num_rows($result);
        if($count>0)
        {
            $_SESSION['EMAIL']=$email;
            $otp=rand(100000,999999);
            
            mysqli_query($con,"update otp set OTP='$otp' where Email='$email'");
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
        $mail->Username="bankproject87@gmail.com";
        $mail->Password="Bank@123#";
        $mail->SMTPSecure='tls';
        $mail->Port=587;
    
     
       
        $mail->setFrom("bankproject87@gmail.com",'Verification Team');
        $mail->addAddress($to);
        $mail->addReplyTo("bankproject87@gmail.com");
        
            
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
