<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>OTP Verification</title>
<link rel="shortcut icon" href="clock-history.svg" type="image/x-icon">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 170px auto;
	}
	.login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 5px 5px 2px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
        padding: 30px;
        height: 300px;
        padding-top:60px; 
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 18px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body style="background:#b23cfd">

<!-- Form -->
<div class="login-form">
    <form  method="post">
        <h2 class="text-center">Login</h2>       
        <div class="form-group first_box">
            <input type="text" id="email" class="form-control" placeholder="Email" required="required" style="border: radius 10px;">
			<span id="email_error" class="field_error"></span>
        </div>
        <div class="form-group first_box">
            <button style="background-color:#b23cfd; color:white" type="button" class="btn btn-block" onclick="send_otp()">Send OTP</button>
        </div>
        <div class="form-group second_box">
            <input type="text" id="otp" class="form-control" placeholder="OTP" required="required">
			<span id="otp_error" class="field_error"></span>
        </div>
		<div class="form-group second_box">
            <button style="background-color:#b23cfd; color:white" type="button" class="btn btn-primary btn-block" onclick="submit_otp()">Verify OTP</button>
        </div>
    </form>
</div>
<!-- Form Ended -->
<script>

	// Function For Send Otp
function send_otp(){
	var email=jQuery('#email').val();
	jQuery.ajax({
		url:'sendotp.php',
		type:'post',
		data:'email='+email,
		success:function(result){
			if(result=='yes'){
				jQuery('.second_box').show();
				jQuery('.first_box').hide();
			}
			if(result=='not_exist'){
				jQuery('#email_error').html('Please Enter valid email');
			}
		}
	});
}

// Function For Submit OTP
function submit_otp(){
	var otp=jQuery('#otp').val();
	jQuery.ajax({
		url:'verifyotp.php',
		type:'post',
		data:'otp='+otp,
		success:function(result){
			if(result=='yes'){
				window.location='Dashboard.php';
			}
			if(result=='not_exist'){
				jQuery('#otp_error').html('Please Enter valid OTP');
			}
		}
	});
}



</script>

<style>
.second_box{display:none;}
.field_error{color:red;}
</style>
</body>
</html>                                		                            