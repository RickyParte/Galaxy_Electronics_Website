<html>
<head>
<title>Stock Maintenace</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css/stockstyle.css">
<link rel="shortcut icon" href="galaxy.svg" type="image/x-icon">
</head>
<body>
	<div class="table-responsive">
<table class="table table-hover table-stripped table-primary">
<thead>
<tr>
<th>WAAT</th>
<th>LED Bulb</th>
<th>LED Tube Light</th>
<th>LED Street Light</th>
<th>LED Capsule Street Light</th>
<th>LED Flood Light Slim Body</th>
<th>LED Flood Light Back Chock</th>
<th>LED High Bay</th>
<th>LED Panel Light</th>
<th>Water Heater</th>
</tr>
</thead>




<?php
session_start();
if(!isset($_SESSION['IS_LOGIN']))
{
	  header("Location: AdminAuthenticate.php");
}
include 'connection.php';
error_reporting(0);
$query="select * from maintenance";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

echo $result['WAAT']." ". $result['LED Bulb']."  ".$result['']."  ".$result['LED Tube Light']."  ".$result['LED Street Light'];
if($total!=0)
{
	while($result=mysqli_fetch_assoc($data))
	{
		echo "
		<tbody>
		<tr>
		<td>".$result['WAAT']."</td>
		<td>".$result['LED_Bulb']."</td>
		<td>".$result['LED_Tube_Light']."</td>
		<td>".$result['LED_Street_Light']."</td>
		<td>".$result['LED_Capsule_Street_Light']."</td>
		<td>".$result['LED_FloodLight_Slim_Body']."</td>
		<td>".$result['LED_FloodLight_Back_Choke']."</td>
		<td>".$result['LED_High_Bay']."</td>
		<td>".$result['LED_Panel_Light']."</td>
		<td>".$result['Water_Heater']."</td>
		</tr>
		</tr>
		</tbody>
		";
		
	}

}
else
{
	echo "No record found";
}
if(isset($_POST['edit']))
	{
		?>
<script> 
window.location.href="Update_stock.php";
</Script>
<?php
	}
?>
</table>
<form method="POST">
<Button type="submit" name="edit" class="btn btn-primary">Edit Details</button>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>