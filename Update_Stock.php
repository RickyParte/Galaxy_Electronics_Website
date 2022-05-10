
<?php
error_reporting(0);
// $conn=mysqli_connect("localhost","root","","galaxyelectronic");
session_start();
       if(!isset($_SESSION['IS_LOGIN']))
       {
             header("Location: AdminAuthenticate.php");
       }
include 'connection.php';


if(isset($_POST['remove']))
{
	$product=$_POST['name'];
	$waat=$_POST['WAAT'];
	$Quantity=$_POST['Quantity'];
	
    $que="SELECT $product FROM `maintenance` WHERE WAAT='$waat'";
    $res=mysqli_query($conn,$que);
    while($row=mysqli_fetch_array($res))
		{
			$rowu=$row['LED_Bulb'];
			$sum=$rowu-$Quantity;
		}
	
	$Query="UPDATE `maintenance`set `$product`=$sum WHERE WAAT='$waat'";
	$result=mysqli_query($conn,$Query);
	
	if($result)
	{
		echo "<script> alert('DATA update Succussfully');</script>";
		
	}
	else
	{
			echo "<script> alert('Error!!!!!! There is some error Unable top find column');</script>";	
			echo mysqli_error();
	}
	
}

if(isset($_POST['submit']))
{
	$product=$_POST['name'];
	$waat=$_POST['WAAT'];
	$Quantity=$_POST['Quantity'];
	
    $que="SELECT $product FROM maintenance WHERE WAAT='$waat'";
    $res=mysqli_query($conn,$que);
    while($row=mysqli_fetch_array($res))
		{
			$rowu=$row['LED_Bulb'];
			$sum=$rowu+$Quantity;
		}
	
	$Query="UPDATE maintenance set $product=$sum WHERE WAAT='$waat'";
	$result=mysqli_query($conn,$Query);
	
	if($result)
	{
		echo "<script> alert('DATA update Succussfully');</script>";
		
	}
	else
	{       
			echo "<script> alert('Error!!!!!! There is some error Unable to find column');</script>";	


	}
	
	
}
if(isset($_POST['details']))
	{
		header('Location:stock.php');
	}

?>


<html>
<head>
<title>Update Stocks</title>
<link rel="shortcut icon" href="galaxy.svg" type="image/x-icon">
</head>
<link rel="stylesheet" href="css/updatestockstylee.css">
<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<body>


<!-- Navbar -->
<?php  include('AdminNavbar.php'); ?>
<!-- Navbar Ended -->
<form method="POST">
 
<div class="container">
<div class="position-relative me-auto mb-5">
    <h3 class="text-light text-center"><a href="Admin.php"><i class="bi bi-arrow-left-circle-fill pe-3 text-danger"></i></a>Go Back</h3>
</div>
<h1 class="text-center mb-5">Stock Maintenance</h1>
<div class="input-group mb-3" >
  <label class="input-group-text" for="inputGroupSelect01" >Select Product</label>
  <select name="name" id="name" onchange="populate(this.id ,'WAAT')"> 
    <option selected >Select a Product Name</option>
    <option value="LED_Bulb">LED Bulb</option>
    <option value="LED_Tube_Light">LED Tube Light</option>
    <option value="LED_Street_Light">LED Street_Light</option>
	<option value="LED_Capsule_Street_Light">LED Capsule Street Light</option>
	<option value="LED_FloodLight_Slim_Body">LED FloodLight Slim Body</option>
    <option value="LED_FloodLight_Back_Choke">LED FloodLight Back Choke</option>
    <option value="LED_High_Bay">LED High Bay</option>
    <option value="LED_Panel_Light">LED Panel Light</option>
    <option value="Water_Heater">Water Heater</option>
   



  </select>
</div>
<div class="input-group mb-2">
  <label class="input-group-text" for="inputGroupSelect01" >Select WAAT</label>
  <select name="WAAT" id="WAAT">     
  <option selected >Select a WAAT</option>
  </select>
</div>

 Product Quantity : <input type="text" name="Quantity"><br><br>
 <button type="submit" name="submit" class="btn btn-success">Add Stock</button>
 <button type="submit" name="remove" class="btn btn-danger">Remove Stock</button>
 <button type="submit" name="details" class="btn btn-primary" >Show Stock Count</button>

 </form>
 <script>
     function populate(s1,s2)
	 {
		 var s1=document.getElementById(s1);
		 var s2=document.getElementById(s2);
		 
		 s2.innerHTML= "";
		 
		 if(s1.value == "LED_Bulb")
		 {
			 var optionArray =['5 WAAT|5 WAAT','7 WAAT|7 WAAT','9 WAAT|9 WAAT','12 WAAT|12 WAAT','15 WAAT|15 WAAT'];
			 
		 }
		 else if(s1.value == "LED_Tube_Light")
		 {
			 var optionArray =['5 WAAT|5 WAAT','10 WAAT|10 WAAT','20 WAAT|20 WAAT'];
		 }
		 else if(s1.value == "LED_Street_Light")
		 {
			 var optionArray =['15 WAAT|15 WAAT','20 WAAT|20 WAAT','24 WAAT|24 WAAT','40 WAAT|40 WAAT','50 WAAT|50 WAAT','60 WAAT|60 WAAT','100 WAAT|100 WAAT'];
			 
		 }
		 else if(s1.value == "LED_Capsule_Street_Light")
		 {
			 var optionArray =['20 WAAT|20 WAAT','30 WAAT|30 WAAT','50 WAAT|50 WAAT'];
		 }
		 else if(s1.value == "LED_FloodLight_Slim_Body")
		 {
			 var optionArray =['10 WAAT|10 WAAT','20 WAAT|20 WAAT','30 WAAT|30 WAAT','50 WAAT|50 WAAT','100 WAAT|100 WAAT','150 WAAT|150 WAAT','200 WAAT|200 WAAT'];
			 
			 
		 }
		 else if(s1.value == "LED_FloodLight_Back_Choke")
		 {
			 var optionArray =['30 WAAT|30 WAAT','50 WAAT|50 WAAT','100 WAAT|100 WAAT','150 WAAT|150 WAAT','200 WAAT|200 WAAT'];
		 }
		 else if(s1.value == "LED_High_Bay")
		 {
			 var optionArray =['50 WAAT|50 WAAT','100 WAAT|100 WAAT','150 WAAT|150 WAAT'];
		 }
		 
		 for(var option in optionArray)
		 {
			 var pair=optionArray[option].split("|");
			 var newoption=document.createElement("option");
			 newoption.value=pair[0];
			 newoption.innerHTML=pair[1];
			 s2.options.add(newoption);
		 }
		 
		 
	 }
 </script>
 <style>
.input-group mb-2
{
	display:block;
	margin-bottom:8px;
	font-family:'roboto';
	font-weight:500;
	float:center;
}

select
{
	border :1px solid #555;
	height:40px;
	width:300px;
	padding:0 20px;
	margin-right: 25px;
}
 </style>
 </body>
 </html>
 
 

 