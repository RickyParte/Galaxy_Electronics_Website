<?php

function register($name,$sname,$username,$email,$mobile,$password)
{
    include 'connection.php';
    $str=substr($name,0,4);
    $sirname=substr($sname,0,4);
    $mob=substr($mobile,0,4);
    $pa=substr($password,0,3);
    $rand=rand(1000,9999);
    $tenantid=$str.'-'.$sirname.'-'.$mob.'-'.$pa.'-'.$rand;
    $check=mysqli_query($conn,"select * from register where username='$username' || email='$email'");
    if(mysqli_num_rows($check)>0)
    {
        echo "<script>alert('Already Taken Username Or Password');</script>";
        
    }
    else{
        $query="insert into register values('$tenantid','$name','$sname','$username','$email','$mobile','$password')";
        $run=mysqli_query($conn,$query);
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
    $login="select * from register where username='$username' && password='$password' limit 1";
    $check=mysqli_query($conn,$login);
    if(mysqli_num_rows($check)>0)
    {
        $row=mysqli_fetch_assoc($check);
        if($row['password']==$password && $row['username']==$username)
        {

                $_SESSION['Loginid']=$row['tenant_id'];
                header("Location:cart.php");
        
        }
        else{
            echo "<script>alert('Incorrect UserName Or Password')</script>";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="src/frontImg.jpg" alt="">
        <div class="text">
          <span class="text-1">Every new friend is a <br> new adventure</span>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="src/backImg.jpg" alt="">
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
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
                <input type="password" name="password" placeholder="Enter your password" required>
              </div>
              <div class="text"><a href="UserForgotPassword.php">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" name="login" value="Login">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
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
                <input type="text" name="email" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="mobile" placeholder="Enter your Mobile Number" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Enter your password" required>
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
</body>
</html>


