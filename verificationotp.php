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
    
        $result=mysqli_query($con,"select * from register where email='$email'");
        $count=mysqli_num_rows($result);
        if($count>0)
        {
            $_SESSION['EMAIL1']=$email;
            $otp=rand(1000,9999);
            
            mysqli_query($con,"update register set otp='$otp' where email='$email'");
            $body="Your OTP is  ".$otp;
            mailsend($email,'OTP For New Password',$body);
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
    
     
       
        $mail->setFrom("bankproject87@gmail.com",'Forgot Password');
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
