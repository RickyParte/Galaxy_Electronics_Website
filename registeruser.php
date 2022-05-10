<?php
  require 'phpmailer/PHPMailer.php';
  require 'phpmailer/Exception.php';
  require 'phpmailer/SMTP.php';
  
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
      
  // if(isset('send'))
  // {
    
     
  
 
 
 
function register($name,$sname,$username,$email,$mobile,$password)
{
    include 'connection.php';
    $str=substr($name,0,4);
    $sirname=substr($sname,0,4);
    $mob=substr($mobile,0,4);
    $pa=substr($password,0,3);
    $rand=rand(1000,9999);
    $tenantid=$str.'-'.$sirname.'-'.$mob.'-'.$pa.'-'.$rand;
    $password1=password_hash($password,PASSWORD_BCRYPT);
    $check=mysqli_query($conn,"select * from register where username='$username' || email='$email'");
    if(mysqli_num_rows($check)>0)
    {
        echo "<script>alert('Already Taken Username Or Password');</script>";
        
    }
    else
    {
          $query="insert into register values('$tenantid','$name','$sname','$username','$email','$mobile','$password1','0','0')";
          $run=mysqli_query($conn,$query);
          if($run && mailsend($email,'Verication Link'))
          {
            echo "<script>alert('Registered.. Please Verify Your Mail For Activate Account')</script>";
          }
          else
          {
            echo "not_exist";
          }   
      }  
 
    
}


//verify Email

    
       
   



function mailsend($to,$subject)
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

 
   
    $mail->setFrom("bankproject87@gmail.com",'Forgot Password');
    $mail->addAddress($to);
    $mail->addReplyTo("bankproject87@gmail.com");
    
        
    $mail->isHTML(true);                                 
    $mail->Subject = $subject;
    $mail->Body    = "<a href='http://localhost:8080/Galaxy_Electronics_Update/New/Galaxy_Electronics/VerifyRegisterEmail.php?email=$to&&verifystatus=0'>Link For Verification</a>";
    $mail->AltBody = 'Please Dont Share OTP with anyone it is harm for you.';
    

    if($mail->send())
    {
       return true; 
    }
    else{
       return false;
    }
    
}
catch (Exception $e){
echo $e;
}
    
}
  




// Register User
if(isset($_POST['register']))
{
    $name=$_POST['fname'];
    $sname=$_POST['lname'];
    $username=$_POST['uname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    register($name,$sname,$username,$email,$mobile,$password);
}


//Login
function checkLogin($username,$password)
{
    session_start();
    include 'connection.php';
    $login="select * from register where username='$username'";
    $check=mysqli_query($conn,$login);
    if(mysqli_num_rows($check)>0)
    {
        $row=mysqli_fetch_assoc($check);
        if($row['verifystatus']==1)
        {
            $verify=password_verify($password,$row['password']);
            if($verify==1)
            {
  
                $_SESSION['Loginid']=$row['tenant_id'];
                header("Location:cart.php");
          
            }
            else{
                echo "<script>alert('Incorrect UserName Or Password')</script>";
            }
        }
        else{
          echo "<script>alert('User Not Verified')</script>";
        }
       
       
    }
    else{
        echo "<script>alert('Incorrect UserName Or Password')</script>";
    }
}


if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    checkLogin($username,$password);
}

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/stylelogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="galaxy.svg" type="image/x-icon">
    <title>Login Register</title>
   </head>
  <style>
    
   </style> 
<body>
  
  <div class="container">
  
    <input type="checkbox" id="flip">
    
    <div class="cover">
      <div class="front">
        <img src="src/frontImg.jpg" alt="">
            <div class="text">
          <span class="text-1">Login Page</span>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="src/backImg.jpg" alt="">
        <div class="text">
          <span class="text-1">Register Account <br> with Galaxy Electronics</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form action="" method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Enter your Username" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
                
              </div>
              <input type="checkbox" onclick="showPassword()"> Show Password
              <div class="text pt-4"><a href="UserForgotPassword.php">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" name="login" value="Login">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
              <div class="text sign-up-text"> <a href="index.php"> <label>Back To Home Page</label> </a></div>
            </div>
        </form>
      </div>
      <!-- Register -->
        <div class="signup-form">
          <div class="title">Signup</div>
        <form action="" method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="fname" placeholder="Enter your First Name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="lname" placeholder="Enter your Last Name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="uname" placeholder="Enter your username" required>
            </div>  
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="mobile" placeholder="Enter your Mobile Number"  required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Enter your password" id="spassword" required>
                <i class="far fa-eye" id="togglePassword" style="margin-left: 350px; cursor: pointer;"></i>
              </div>
              <div class="button input-box">
                <input type="submit" name="register" value="Register">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
  <script>
    
//login 
function showPassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  
  
  
  //register show password
  const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#spassword');
   
    togglePassword.addEventListener('click', function (e) {
      // toggle the type attribute
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      // toggle the eye slash icon
      this.classList.toggle('fa-eye-slash');
  });

  </script>
</body>
</html>


