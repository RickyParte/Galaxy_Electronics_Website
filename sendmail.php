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
    $to=$_SESSION['mail'];
    // if(isset('send'))
    // {
       if(mailsend($to)){
            echo "yes";
        }
        else{
            echo "not_exist";
        }
       
    
   
   
   function mailsend($to)
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
    
     
       
        $mail->setFrom("ur@gmail.com",'Delivery Team');
        $mail->addAddress($to);
        $mail->addReplyTo("ur@gmail.com");
        
            
        $mail->isHTML(true);                                 
        $mail->Subject = "Order Delivery";
        $mail->Body    = "Your Delivery arrived in 5-6 days";
        $mail->AltBody = 'Please Dont Share information with anyone it is harm for you.';
        
    
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
