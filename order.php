<?php
session_start();
if(!isset($_SESSION['Loginid']))
{
    header("Location: registeruser.php");
}
$tenantid=$_SESSION['Loginid'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order Details</title>
</head>
<style>
    body{
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}
    </style>
<body>
<h3 class=" mt-4 text-dark text-center">Order Shipping Details</h3>
    <div class="container mt-4 bg-light">
    <form action="" method="POST">
<div class="row pt-4">
  <div class="col-md-8 mb-4 ">
    <div class="card mb-4">
      <div class="card-header py-3">
        <h5 class="mb-0">Biling details</h5>
      </div>
      <div class="card-body">
      
       
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
              <label class="form-label" for="form7Example1">First name</label>
                <input type="text" name="fname" id="form7Example1" class="form-control" required />
                
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
              <label class="form-label" for="form7Example2">Last name</label>
                <input type="text"  name="lname" id="form7Example2" class="form-control" required />
                
              </div>
            </div>
          </div>

        <div class="row">
            <div class="col">
            <div class="form-outline mb-4">
          <label class="form-label" for="form7Example5">Email</label>
            <input type="email" name="email" id="form7Example5" class="form-control" required />
            
          </div>
            </div>
            <div class="col">
            <div class="form-outline mb-4">
          <label class="form-label" for="form7Example6">Phone</label>
            <input type="text" name="phonenum" id="form7Example6" class="form-control" required />
           
          </div>
            </div>
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="form7Example4">Address</label>
            <input type="text" name="address" id="form7Example4" class="form-control" required  />
            
          </div>
     
          <div class="row">
              <div class="col">
                 
          <div class="form-outline mb-4">
          <label class="form-label" for="form7Example4">Pin Code</label>
            <input type="text" name="pincode" id="form7Example4" class="form-control" required />
            
          </div>
          </div>

          <div class="col pt-4">
          <div class="input-group mb-3">
  <select class="form-select " name="pay" id="inputGroupSelect01" required >
    <option selected>Choose...</option>
    <option value="1">Cash On Delivery</option>
    
  </select>
</div>
          </div>
          </div>
      </div>
    </div>
  </div>

  <div class="col-md-4 mb-4">
    <div class="card mb-4">
      <div class="card-header py-3">
        <h5 class="mb-0">Summary</h5>
      </div>
      <div class="card-body">
        <ul class="list-group list-group-flush">
          <li
            class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
            Products:
            <span>
            <strong>
            <!-- Total -->
             </strong>
            </span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center px-0">
            GST Amount:
            <!-- <span><strong>GST</strong></span> -->
            
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center px-0">
            Shipping From
            <span><strong>Galaxy Electronics</strong></span>
            
          </li>
          <li
            class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
            <div>
              <strong>Total amount</strong>
              <strong>
                <p class="mb-0">(including 18% GST)</p>
              </strong>
            </div>
            <span><strong>
              <!-- Final Amount -->
          </strong></span>
          </li>
        </ul>
      
        <button name="confirmorder" class="btn btn-primary  btn-lg btn-block">Make Purchase</button>
  
    
      </div>
      
    </div>
  </div>
</div>
</form>
</div>




<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
<?php
include 'connection.php';
if(isset($_POST['confirmorder']))
{
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $address=$_POST['address'];
    $pin=$_POST['pincode'];
    $email=$_POST['email'];
    $mobilen=$_POST['phonenum'] ;
    $payment=$_POST['pay'];
    $orderid='GLXODR'.rand(10000,99999);
    $_SESSION['order']=$orderid;
    $status="0";
    $check=mysqli_query($conn,"Select producttotalamount from cartcount where tenantid='$tenantid'");
    
  while($row=mysqli_fetch_array($check))
  {
    $total+=$row['producttotalamount'];
  }
$gst=$total/100*18;
$finaltotalamount=$total+$gst;
    purchaseOrder($tenantid,$orderid);
    saveOrder($tenantid,$firstname,$lastname,$email,$mobilen,$address,$pin,$payment,$total,$gst,$finaltotalamount,$orderid,$status);
    deletecart($tenantid);
}
function saveOrder($tenantid,$firstname,$lastname,$email,$mobilen,$address,$pin,$payment,$total,$gst,$finaltotalamount,$orderid,$status)
{
  include 'connection.php';
  if($total!=0 && $gst!=0)
  {
    $run="insert into orders (tenantid,firstname,lastname,email,mobile,address,pincode,payment,amount,gst,finalamount,orderid,status) values ('$tenantid','$firstname','$lastname','$email','$mobilen','$address','$pin','$payment','$total','$gst','$finaltotalamount','$orderid','$status')";
    $query=mysqli_query($conn,$run);
    if($run)
    {
      ?>
        <script>window.location.href="receipt.php";</script>
      <?php
    }
  }
 
  
}

function purchaseOrder($tenantid,$orderid)
{
  include 'connection.php';
  $runquery="select * from cartcount where tenantid='$tenantid'";
  $run=mysqli_query($conn,$runquery);
  while($row=mysqli_fetch_array($run))
  {
    $gst=$row['producttotalamount']*18/100;
    $finalamount=$row['producttotalamount']+$gst;
    $que="insert into purchaseorder 
    (tenanid,orderid,productname,productprice,productquantity,producttotalamount,productgst,productfinalamount) 
    values ('$tenantid','$orderid','$row[productname]','$row[productprice]','$row[productquantity]','$row[producttotalamount]',
    '$gst','$finalamount')";
    $runq=mysqli_query($conn,$que);
  }
   
}

function deletecart($tenantid)
{
  include 'connection.php';
  $delete="delete from cartcount where tenantid='$tenantid'";
  $rundelete=mysqli_query($conn,$delete);
}


?>