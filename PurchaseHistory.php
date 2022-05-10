<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>purchase History</title>
  <link rel="shortcut icon" href="galaxy.svg" type="image/x-icon">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example"> 
    <div class="container">
      <a class="navbar-brand" style="color:#7d2ae8" href="index.php"><strong>Galaxy Electronics</strong></a>
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
          
        <li class="nav-item">
            <a class="nav-link  active" aria-current="page" href="file/GALAXY BROCHURE.pdf"><i class="bi bi-book-half pe-1"></i>Get Brochure</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link  active" aria-current="page" href="#"><i class="bi bi-emoji-smile-fill pe-1"></i>About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  active" aria-current="page" href="AboutUs.php"><i class="bi bi-telephone-fill pe-1"></i>Contact Us</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link  active" aria-current="page" href="PurchaseHistory.php"><i class="bi bi-alarm pe-1"></i>Purchase History</a>
        </li>
        </ul>
        <div class="social">
        <a style="color: #25D366;" href="#!" role="button">
        <i class="fab fa-whatsapp fa-2x pe-2"></i></a>

<!-- Twitter -->
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
  <h3 class="ms-4 mt-4"><a href="cart.php"><i class="bi bi-arrow-left-circle-fill pe-3"></i></a>Go Back</h3>
</body>
</html>

<?php
session_start();
include 'connection.php';

//check Login is done or not
if(!isset($_SESSION['Loginid']))
{
    header("Location: registeruser.php");
}

$tenant=$_SESSION['Loginid'];
?>
 <div class="table-responsive mt-5 pt-4">
<table class="table table-primary">
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
      <th scope="col">Order</th>
    </tr>
  </thead>
 
    
    
  <tbody>

  <?php

$query="select * from orders where tenantid='$tenant' order by time DESC";
$run=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($run))
{
    ?>
    <tr>
      <form action="checkpurchase.php" method="post">
        <td>
        <input type='hidden' name='orderid' value='<?php echo $row['orderid'] ?>' /><?php echo $row['orderid']; ?>
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
            echo "<b class='text-dark'>Dispatched</b>";
        }
          ?></td>
        <td>
           <button class="btn btn-primary" name="vieworder">View Order</button> 
        </td>
        </form>
        <?php
    }
    ?>
    </tr>
  </tbody>
</table>

</div>


<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">