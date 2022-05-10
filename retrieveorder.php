
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link rel="shortcut icon" href="galaxy.svg" type="image/x-icon">
</head>
<body style="background: linear-gradient(135deg, #b23cfd, #0cd1e0)">

<!-- Navbar -->
<?php  include('AdminNavbar.php'); ?>
<!-- Navbar Ended -->
<nav class="bd-subnavbar pt-4 mt-5" aria-label="Secondary navigation">
  <div class="container d-flex align-items-md-center">
    <div class="position-relative me-auto">
    
  <h3><a href="Admin.php"><i class="bi bi-arrow-left-circle-fill pe-3 text-danger"></i></a>Go Back</h3>
  </div>
  <div class="dropdown ms-3">
    <h1><a href="retrieveorder.php"><i class="bi bi-arrow-clockwise text-warning"></i></a></h1>
  
</div>
  
</div>



  </div>
</nav>

    <div class="table-responsive mt-3 pt-4 ms-3 me-3">
<table class="table" style="background-color:#212529; color:white;">
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
            $mail->Username="your";
            $mail->Password="your";
            $mail->SMTPSecure='tls';
            $mail->Port=587;
        
         
           
            $mail->setFrom("ur",'Verification Team');
            $mail->addAddress($email);
            $mail->addReplyTo("ur@gmail.com");
            
                
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
  include('connection.php');
    $query="select * from orders order by time DESC";
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
          echo "<b class='text-danger'>Pending</b>"; 
        }
        else if($row['status']==1){
            echo "<b class='text-warning'>Dispatched</b>";
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
           <button class="btn btn-success" name="changestatus">Change Status</button> 
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
 
?>
