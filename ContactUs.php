<!doctype html>
<html lang="en">
<head>
	<title>Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/stylecontact.css">

	</head>
	<body style="background-color:#7d2ae8">	
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark" aria-label="Eighth navbar example">
    <div class="container">
    <a class="navbar-brand text-info" href="index.php"><strong>Galaxy Electronics</strong></a>
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarsExample07" style="">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php"> <i class="bi bi-house-door-fill pe-1"></i>Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link  active" aria-current="page" href="cart.php"><i class="bi bi-bag-fill pe-1"></i>Buy Products</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-person-circle pe-1"></i>Login
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="AdminAuthenticate.php">For Admin</a></li>
            <li><a class="dropdown-item" href="registeruser.php">For User</a></li>
        </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link  active" aria-current="page" href="file/GALAXY BROCHURE.pdf" target="_blank"><i class="bi bi-book-half pe-1"></i>Get Brochure</a>
        </li>
        <li class="nav-item">
            <a class="nav-link  active" aria-current="page" href="AboutUs.php"><i class="bi bi-emoji-smile-fill pe-1"></i>About Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link  active" aria-current="page" href="ContactUs.php"><i class="bi bi-telephone-fill pe-1"></i>Contact Us</a>
        </li>
        </ul>
        <div class="social">

		<!-- whatsapp -->
		<a style="color: #25D366;" href="#!" role="button">
        <i class="fab fa-whatsapp fa-2x pe-2"></i></a>

		<!-- Phone -->
    	<a style="color: #55acee;" href="#!" role="button">
    	<i class="fas fa-mobile-alt fa-2x pe-2"></i></i>
    	</a>

		<!-- Google -->
    	<a style="color: #dd4b39;" href="#!" role="button">
    	<i class="fab fa-google fa-2x"></i></a>
		</div>
    </div>
    </div>
</nav>
		<div class="container mt-2">
			<!-- Form For Contact Us  -->
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h1 class="heading-section text-light"><b>Contact Us</b></h1>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 ">
					<div class="wrapper">
						<div class="row no-gutters mb-5">
							<div class="col-md-6">
								<div class="contact-wrap w-100 p-md-5 p-4 bg-dark">
									<h3 class="mb-4 text-light">Contact Us</h3>
									<div id="form-message-warning" class="mb-4"></div> 
					<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				    </div>
									<form method="POST" action="" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label text-light" for="name">Full Name</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label text-light" for="email">Email Address</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label text-light" for="subject">Subject</label>
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label text-light" for="#">Message</label>
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<button name="send" class="btn" style="background-color:#7d2ae8; color:white">Send Message</button>
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						<!-- Ended Form -->
						<!-- Map View -->
							<div class="col-md-6 d-flex align-items-stretch">
								<!-- <div id="map"> -->
									<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7569.168609533577!2d73.803368!3d18.457174!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5e9aa0c37d7e6fbb!2sGalaxy%20electronics!5e0!3m2!1sen!2sin!4v1636723590310!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			        </div>
					<!-- End Map view -->
							</div>
						</div>
						<!-- Address And other -->
						<div class="row">
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center bg-dark">
			        			<span class="fa fa-map-marker"></span>
			        		</div>
			        		<div class="text-warning">
				            <p><span>Address:</span> SR.NO.137, MAULIKRUPA BUILDING , OFFICE NO. 04, OPP. GANESH MANGAL KARYALAY, SINHGAD ROAD, NEAR NANDED POST OFFICE, DHAYARI</p>
				        </div>
			        </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center bg-dark">
			        			<span class="fa fa-phone"></span>
			        		</div>
			        		<div>
				            <p><span>Phone:</span> <a href="tel://8830994756" class="text-warning">+91 8830994756</a></p>
				        </div>
			        </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center bg-dark">
			        			<span class="fa fa-paper-plane"></span>
			        		</div>
			        		<div class="text-warning">
				            <p><span>Email:</span> <a href="https://mail.google.com" class="text-warning">galaxyelectronics@gmail.com</a></p>
				        </div>
			        </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center bg-dark">
			        			<span class="fa fa-globe"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Website</span> <a href="#" class="text-warning">yoursite.com</a></p>
				        </div>
			        </div>
							</div>
						</div>
						<!-- Ended here -->
					</div>
				</div>
			</div>
		</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css"
rel="stylesheet"
/>

	</body>
</html>

<?php
error_reporting(0);

    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/Exception.php';
    require 'phpmailer/SMTP.php';
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

	
	if(isset($_POST['send']))
	{
		$email=$_POST['email'];
		$name=$_POST['name'];
		$sub=$_POST['subject'];
		$msg=$_POST['message'];
		if(mailsend($email,$name,$msg,$sub)){
			echo "<script>alert('Done')</script>";
		}
		else{
			echo "<script>alert('Not')</script>";
		}
	}

function mailsend($to,$name,$msg,$sub)
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
    
        $mail->setFrom($to,'Contact Us');
        $mail->addAddress("bankproject87@gmail.com");
        $mail->addReplyTo("bankproject87@gmail.com");
        
            
        $mail->isHTML(true);                                 
        $mail->Subject = $sub." From ".$name;
        $mail->Body    = "Hii Admin ".$msg;
        
    
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
