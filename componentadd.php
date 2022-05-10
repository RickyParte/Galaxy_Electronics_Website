<?php
session_start();
if(!isset($_SESSION['IS_LOGIN']))
{
      header("Location: AdminAuthenticate.php");
}
error_reporting(0);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/addcomstylee.css">
    <link rel="shortcut icon" href="galaxy.svg" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
    <title>Add Components</title>
  </head>
  <body>
  <!-- Navbar -->
  <?php  include('AdminNavbar.php'); ?>
  <!-- Navbar Ended -->
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-4">
          <div class="card">
            <div class="col">
            <div class="card-header">
              <h4 class="card-title">Add Components</h4>
            </div>
            </div>
            <div class="card-body">
              <div class="row">
                
                <div class="col-md-6">
                <form action="" method="POST">

  
      <div class="form-group">
        

      




<?php
include 'connection.php';
$sql="SELECT DISTINCT driver FROM stock_comp";
$res=mysqli_query($conn,$sql);
?>
         Select Driver:
        <select id="product" name="driver" class="mt-2" onchange="selectproduct()">
            <?php
            while($row = mysqli_fetch_array($res)){
                ?>
                <option value="<?php  echo $row['driver']; ?>"><?php echo $row['driver']; ?></option>
                <?php
             }
            ?>
            
</select>
<div></div>
            

<input type="number" id="driverquantity" name="driverquantity"  class="mt-2" placeholder="Enter Driver Quantity" min="1" >
    <br/>

             
<?php
include 'connection.php';
$sql="SELECT DISTINCT pcb FROM stock_comp";
$res=mysqli_query($conn,$sql);
?>
         Select PCB:
        <select id="product" name="pcb" class="mt-2" onchange="selectproduct()">
            <?php
            while($row = mysqli_fetch_array($res)){
                ?>
                <option value="<?php  echo $row['pcb']; ?>"><?php echo $row['pcb']; ?></option>
                <?php
             }
            ?>
</select>
            </div>

<input type="number" id="quantity" name="pcbquantity"  class="mt-2" placeholder="Enter PCB Quantity" min="1" >
    <br/>

    
    
    
    
    
    <?php
include 'connection.php';
$sql="SELECT DISTINCT housing FROM stock_comp";
$res=mysqli_query($conn,$sql);
?>
         Select Housing:
        <select id="product" name="housing" class="mt-2" onchange="selectproduct()">
            <?php
            while($row = mysqli_fetch_array($res)){
                ?>
                <option value="<?php  echo $row['housing']; ?>"><?php echo $row['housing']; ?></option>
                <?php
             }
            ?>
</select>
            </div>
            </div >

<input type="number" id="quantity" name="housingquantity"  class="mt-2" placeholder="Enter Housing Quantity" min="1" >
    <br/>

            
    <button type="submit" name="submit"  class="btn btn-success mt-4">Submit</button>
    
    
    <button type="submit" name="remove"  class="btn btn-danger mt-4">Remove</button>

    <button type="submit" name="edit" class="btn btn-primary mt-4">Show Details</button>
    <?php
    if(isset($_POST['edit']))
	{
		?>
<script> 
window.location.href="compdetail.php";
</Script>
<?php
	}
?>
</table>

  </form>


  <?php
//  error_reporting(0);
include 'connection.php';

if(isset($_POST['submit'])){
  
  $driver=$_POST['driver'];
  $driverquantity=$_POST['driverquantity'];
  $pcb=$_POST['pcb'];
  $pcbquantity=$_POST['pcbquantity'];
  $housing=$_POST['housing'];
  $housingquantity=$_POST['housingquantity'];

  $insertquery="SELECT `driverquantity` FROM `stock_comp` WHERE driver='$driver'";
  
  $res=mysqli_query($conn,$insertquery);

  $driversum=0;
  $pcbsum=0;
  $housingsum=0;




  while($row=mysqli_fetch_array($res)){


    $rowu=$row['driverquantity'];
    $driversum=$rowu+$driverquantity;
    // echo $driversum;

    $rowu=$row['pcbquantity'];
    $pcbsum=$rowu+$pcbquantity;
    // echo $pcbsum;

    $rowu=$row['housingquantity'];
    $housingsum=$rowu+$housingquantity;
    // echo $housingsum;

      



$insertquery1="SELECT `pcbquantity` FROM `stock_comp` WHERE pcb='$$pcb'";
$res1=mysqli_query($conn,$insertquery1);
while($row1=mysqli_fetch_array($res1)){
  $rowu1=$row1['pcbquantity'];
    $pcbsum=$rowu1+$pcbquantity;
}

$insertquery2="SELECT `housingquantity` FROM `stock_comp` WHERE housing='$housing'";
$res2=mysqli_query($conn,$insertquery2);
while($row2=mysqli_fetch_array($res2)){
  $rowu2=$row2['housingquantity'];
    $housingsum=$rowu2+$housingquantity;
}


  
$query="UPDATE stock_comp SET driverquantity='$driversum'  WHERE driver='$driver'";

$result=mysqli_query($conn,$query);

  if($result){

    
    echo"<script>alert('insert');</script>"; 
      


  }else{

    echo"<script>alert('error');</script>"; 
  }


  }

$query1="UPDATE stock_comp SET pcbquantity='$pcbsum'  WHERE pcb='$pcb'";

$result1=mysqli_query($conn,$query1);

  


  

  $query2="UPDATE stock_comp SET housingquantity='$housingsum'  WHERE housing='$housing'";

$result2=mysqli_query($conn,$query2);

  

}
  





?>

 <!-- remove -->

<?php
//  error_reporting(0);
$conn=mysqli_connect("localhost","root","","addproduct");

if(isset($_POST['remove'])){
  
  $driver=$_POST['driver'];
  $driverquantity=$_POST['driverquantity'];
  $pcb=$_POST['pcb'];
  $pcbquantity=$_POST['pcbquantity'];
  $housing=$_POST['housing'];
  $housingquantity=$_POST['housingquantity'];

  $insertquery="SELECT `driverquantity` FROM `stock_comp` WHERE driver='$driver'";
  
  $res=mysqli_query($conn,$insertquery);

  // $driversum=0;
  // $pcbsum=0;
  // $housingsum=0;




  while($row=mysqli_fetch_array($res)){


    $rowu=$row['driverquantity'];
    $driversum=$rowu-$driverquantity;
    // echo $driversum;

    $rowu=$row['pcbquantity'];
    $pcbsum=$rowu-$pcbquantity;
    // echo $pcbsum;

    $rowu=$row['housingquantity'];
    $housingsum=$rowu-$housingquantity;
    // echo $housingsum;

      



$insertquery1="SELECT `pcbquantity` FROM `stock_comp` WHERE pcb='$pcb'";
$res1=mysqli_query($conn,$insertquery1);
while($row1=mysqli_fetch_array($res1)){
  $rowu1=$row1['pcbquantity'];
    $pcbsum=$rowu1-$pcbquantity;
}

$insertquery2="SELECT `housingquantity` FROM `stock_comp` WHERE housing='$housing'";
$res2=mysqli_query($conn,$insertquery2);
while($row2=mysqli_fetch_array($res2)){
  $rowu2=$row2['housingquantity'];
    $housingsum=$rowu2-$housingquantity;
}


  
$query="UPDATE stock_comp SET driverquantity='$driversum'  WHERE driver='$driver'";

$result=mysqli_query($conn,$query);

  if($result){

    
    echo"<script>alert('remove');</script>"; 
      


  }else{

    echo"<script>alert('error');</script>"; 
  }


  }

$query1="UPDATE stock_comp SET pcbquantity='$pcbsum'  WHERE pcb='$pcb'";

$result1=mysqli_query($conn,$query1);

  


  

  $query2="UPDATE stock_comp SET housingquantity='$housingsum'  WHERE housing='$housing'";

$result2=mysqli_query($conn,$query2);

  

}
  

?>

</div>
              
              </div>
            </div>
          </div>
        </div>
                      </div>
      
  