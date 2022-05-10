<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title> Login Form</title>
  <link rel="shortcut icon" href="galaxy.svg" type="image/x-icon">
      <link rel="stylesheet" href="css/logstyle.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body style="background: linear-gradient(135deg, #0cd1e0, #b23cfd)">
      <div class="container">
  
         <header>Login Form</header>
         <form action="" method="POST">
            <div class="input-field">
               <input class="pswrd" type="password" name="password"  required>
               <span class="show">SHOW</span>
               <label>Password</label>
            </div>
            <div class="button">
            <div class="inner">
                    </div>
             <button name="submit">LOGIN</button>
            </div>
         </form>
        
         <div class="forgot">
         <h4> <a href="ForgotPassword.php">Forgot Password</a></h4>
         </div>

      </div>
      <script>
         // Show Password For Login Admin
         var input = document.querySelector('.pswrd');
         var show = document.querySelector('.show');
         show.addEventListener('click', active);
         function active(){
           if(input.type === "password"){
             input.type = "text";
             show.style.color = "#1DA1F2";
             show.textContent = "HIDE";
           }else{
             input.type = "password";
             show.textContent = "SHOW";
             show.style.color = "#111";
           }
         }
      </script>
   </body>
</html>
<?php   
session_start();
include 'connection.php';
$user=$_SESSION['IS_LOGIN'];
// Check Login
if(isset($_SESSION['IS_LOGIN']))
{
   // Check Right User Entered or Not
    if(isset($_POST['submit']))
    {

       $password=$_POST['password'];
    
       $sql = "SELECT * FROM otp where Email='$user' && password='$password'";
       $result = mysqli_query($conn,$sql);
       if($result->num_rows > 0){
          $row = mysqli_fetch_assoc($result);
          $username=$row['Email'];
          header("Location: Admin.php");
       }else{
          echo "<script>alert('Plzz Enter Valid Password');</script>";
       }
    
    }
}
else
{
    header("Location: AdminAuthenticate.php");
}
?>