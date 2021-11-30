
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
  <a class="navbar-brand text-white" href="admin.php"> <i class="bi bi-lightbulb-fill text-white pe-3" style="font-size:25px;"></i><b>Galaxy Electronics</b></a>
 <!-- <h4 class="text-light"><i class="bi bi-emoji-smile-fill text-warning pe-3"></i>Hey Welcome To Galaxy Electronics !<i class="bi bi-emoji-smile-fill text-warning ps-2"></i></h4> -->

    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end bg-dark text-light" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header text-light bg-primary">
        <h5 class="offcanvas-title h3" id="offcanvasNavbarLabel">Galaxy Electronics</h5>
        <button type="button" class="btn-close text-light btn-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end h4 flex-grow-1 pe-3">
        <li class="nav-item"> 
          <a class="nav-link disable text-warning" aria-current="page" href="Admin.php"><i class="bi bi-speedometer2 pe-3" style="color:white;"></i>DashBoard</a>
          </li>
        <li class="nav-item"> 
          <a class="nav-link disable text-warning" aria-current="page" href="#"><i class="bi bi-stack pe-3" style="color:white;"></i>Total Stock</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disable text-warning" aria-current="page" href="retrieveorder.php"><i class="bi bi-cart-fill pe-3" style="color:white;"></i>Order Details</a>
          </li>
          <li class="nav-item">
          <a class="nav-link disable text-warning" aria-current="page" href="AddNewProduct.php"><i class="bi bi-plus-circle pe-3" style="color:white;"></i>Add New Product</a>
          </li>
          <li class="nav-item">
          <a class="nav-link disable text-warning" aria-current="page" href="#"><i class="bi bi-arrow-up-circle-fill pe-3" style="color:white;"></i>Update Existing Products</a>
          </li>
          <li class="nav-item">
          <a class="nav-link disable text-warning" aria-current="page" href="#"><i class="bi bi-x-circle pe-3" style="color:white;"></i>Delete Products</a>
          </li>
          <li class="nav-item">
          <a class="nav-link disable text-warning" aria-current="page" href="Products.php"><i class="bi bi-list-check pe-3" style="color:white;"></i>Components List</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active  text-warning" aria-current="page" href="Logout.php"><i class="bi bi-box-arrow-right pe-3" style="color:white;"></i>Logout</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active  text-warning" aria-current="page" href="#"><i class="bi bi-question-diamond-fill pe-3" style="color:white;"></i>Help</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<div class="row">
<div class="col-md-8 mt-5 ms-5 pt-4">
<h3><a href="admin.php"><i class="bi bi-arrow-left-circle-fill pe-3"></i></a>Go Back</h3>
</div>
<div class="col-md-3 mt-5 ms-5 pt-4">
<a href="retrieveorder.php"><h1><i class="bi bi-arrow-clockwise"></i></h1></a>
</div>
</div>
    <div class="table-responsive mt-3 pt-4 ms-3 me-3">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Order ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile No.</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Address</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Order Time</th>
      <th scope="col">Order Status</th>
      <th scope="col">View Order</th>
      <th scope="col">Change Order Status</th>
    </tr>
  </thead>
 
    
    
  <tbody>
  <?php
  error_reporting(0);
  session_start();
  if(!isset($_SESSION['IS_LOGIN']))
      {
        header("Location: AdminAuthenticate.php");
      }
  include('connection.php');
    $query="select * from orders";
    $run=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($run))
    {
       ?>
   
  <tr>
      <form action="checkorder.php" method="post">
        <td>
        <input type='hidden' name='orderid' value='<?php echo $row['orderid'] ?>' />
        <?php
         echo $row['orderid'];
        //  $orderid=$row['orderid'];
         ?>
         </td>
        <td><?php echo $row['firstname'].' '.$row['lastname']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['mobile']; ?></td>
        <td class="text-center"><?php echo $row['amount']+$row['gst']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php if($row['payment']==1)
        {
            echo "Cash On Delivery";
        } ?></td>
        <td><?php echo $row['time']; ?></td>
        <td><?php if($row['status']==0)
        {
          echo "Pending"; 
        }
        else if($row['status']==1){
            echo "Dispatched";
        }
          ?></td>
        <td>
           <button class="btn btn-primary" name="vieworder">View Order</button> 
        </td>
        </form>
        <form action="" method="post">
        <input type='hidden' name='orderid' value='<?php echo $row['orderid'] ?>' />
        <input type='hidden' name='email' value='<?php echo $row['email']; ?>' />
        <td>
           <button class="btn btn-primary" name="changestatus">Change Status</button> 
        </td>
        </form>
        
        <?php
    }
    ?>
    </tr>
  </tbody>
</table>

</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</body>
</html>


<?php
 error_reporting(0);
 session_start();
 // include ('createotp.php');
     require 'phpmailer/PHPMailer.php';
     require 'phpmailer/Exception.php';
     require 'phpmailer/SMTP.php';
     
     use PHPMailer\PHPMailer\PHPMailer;
     use PHPMailer\PHPMailer\SMTP;
     use PHPMailer\PHPMailer\Exception;
 include 'connection.php'; 
 $orderid=$_POST['orderid'];
 $email=$_POST['email'];
if(isset($_POST['changestatus']))
{
  $sql="select status from orders where orderid='$orderid'";
  $run=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($run);
  if($row['status']=='0')
  {
    $update="update orders set status='1' where orderid='$orderid'"; 
    mysqli_query($conn,$update); 
   
    
    
      
        try{
        
        
            $mail=new PHPMailer;                  
            $mail->isSMTP();  
            $mail->Host="smtp.gmail.com";
            $mail->SMTPAuth=true;
            $mail->Username="bankproject87@gmail.com";
            $mail->Password="Bank@123#";
            $mail->SMTPSecure='tls';
            $mail->Port=587;
        
         
           
            $mail->setFrom("bankproject87@gmail.com",'Verification Team');
            $mail->addAddress($email);
            $mail->addReplyTo("bankproject87@gmail.com");
            
                
            $mail->isHTML(true);                                 
            $mail->Subject = "Delivery";
            $mail->Body    = 'Your Order is dispatched. Delivery may arrive in 5-6 days.';
            $mail->AltBody = 'Please Dont Share OTP with anyone it is harm for you.';
            
        
            if($mail->send())
            {
              echo "<script>alert('Mail Sent');</script>";
            }
           
            
        }
        catch (Exception $e){
        echo $e;
        }
       
  }
  else{
    echo "<script>alert('already Updated');</script>";
  }
  
    }
?>
