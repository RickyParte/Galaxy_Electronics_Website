<?php
   
include('connection.php');

session_start();
if(isset($_SESSION['email']))
{
  // echo $_SESSION['email'];
  $name=$_SESSION['email'];
}
else{
  header("Location: UserForgotpassword.php");
}

   if(isset($_POST['forgotpassword']))
	{
		
    $pass = $_POST['password'];	
    $re_pass = $_POST['confirmpassword'];
		$s_query="SELECT * FROM register where email='$name'";
		$runs=mysqli_query($conn,$s_query);
		if($row=mysqli_fetch_array($runs))
		{
			$rowu=$row['email'];
			
		  if($rowu == $name )
		  {
		    if($pass == $re_pass )
		    {

		
		      $query="UPDATE register SET password='$pass' WHERE email='$name'";
		
		      $run=mysqli_query($conn,$query) or die (mysqli_error());
		
		      if($run)
		      {
			      echo "<script> alert('Password update Succussfully');</script>";
		      } 
		
		      else{
                  echo "<script> alert('Error!!!!!! Password is not changed There is some Problem');</script>";			
			      }

	}
	else{
		
		 echo "<script> alert('Error!!!!!! Password is not Match ');</script>";
		
	}
	} else
	{
		 echo "<script> alert('Error!!!!!! USER NOT Found ');</script>";

	}
		}
	
		}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Match</title>
</head>
<body>
   


    <form method="POST"> 
<!--    
    <input type="text" id="password"  name="email" placeholder="Email" > -->
    <div id="forgot">

        <div class="container mt-5 pt-5">
            <div id="forgot-row" class="row justify-content-center align-items-center">
                <div id="forgot-column" class="col-md-6">
                    <div id="forgot-box" class="col-md-12">
                        <form id="forgot-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Forgot Password</h3>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password"  placeholder="Enter New Password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Confirm Password:</label><br>
                                <input type="password" name="confirmpassword" id="confirmpassword"  placeholder="Re-Enter New Password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="forgotpassword" class="btn btn-info text-center col-12 btn-md" value="Forgot Password">
                            </div>
                            <div id="back-link" class="text-center">
                                <a href="index.php" class="text-info">back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    
    </form>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
	
</body>
</html>
