<html>
<head>
<title>User Details</title>
<link rel="shortcut icon" href="galaxy.svg" type="image/x-icon">
</head>
<body style="background: linear-gradient(135deg, #9b59b6, #71b7e6);">
	<?php include 'AdminNavbar.php'; ?>
	<div class="container mt-5 pt-3">
	<div class="table-responsive">
<table class="table" style="background-color:#212529; color:white; margin-top: 50;">

<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Username</th>
<th>Email</th>
<th>Mobile</th>
</tr>




<?php
include 'connection.php';
error_reporting(0);
// Retrieve Customers Details For Admin
$query="select * from register";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);



	while($result=mysqli_fetch_assoc($data))
	{
		echo "
		<tr>
		<td>".$result['firstname']."</td>
		<td>".$result['lastname']."</td>
		<td>".$result['username']."</td>
		<td>".$result['email']."</td>
		<td>".$result['mobile']."</td>
		
		</tr>
		</tr>
		";
		
	}



?>
</table>
</div>
</div>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
