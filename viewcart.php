<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cart</title>
    <link rel="shortcut icon" href="galaxy.svg" type="image/x-icon">
</head>
<body>
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
          
        <li class="nav-item">
            <a class="nav-link  active" aria-current="page" href="file/GALAXY BROCHURE.pdf" target="_blank"><i class="bi bi-book-half pe-1"></i>Get Brochure</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link  active" aria-current="page" href="AboutUs.php"><i class="bi bi-emoji-smile-fill pe-1"></i>About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  active" aria-current="page" href="ContactUs.php"><i class="bi bi-telephone-fill pe-1"></i>Contact Us</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link  active" aria-current="page" href="purchasehistory.php"><i class="bi bi-alarm-fill pe-1"></i>Purchase History</a>
        </li>
          <!-- <li class="nav-item">
          <a class="nav-link  active" aria-current="page" href="exit.php"><i class="bi bi-box-arrow-right pe-1"></i>LogOut</a>
          </li> -->
        </ul>
        <div class="social">
<!-- whatsapp -->
        <a style="color: #25D366;" href="#!" role="button">
        <i class="fab fa-whatsapp fa-2x pe-2"></i></a>

<!-- Phone -->
      <a style="color: #55acee;" href="#!" role="button">
      <i class="fas fa-mobile-alt fa-2x pe-2"></i></i>
      </a>

<!-- Mail -->
      <a style="color: #dd4b39;" href="#!" role="button">
      <i class="fab fa-google fa-2x"></i></a>

</div>
      </div>
    </div>
  </nav>

 
<nav class="bd-subnavbar py-2" aria-label="Secondary navigation">
  <div class="container d-flex align-items-md-center">
    <div class="position-relative me-auto">
    
  <h3><a href="cart.php"><i class="bi bi-arrow-left-circle-fill pe-3"></i></a>Go Back</h3>
  </div>
  <div class="dropdown ms-3">
    <a href="exit.php"><button class="btn btn-danger" id="bd-versions"  aria-expanded="false" data-bs-display="static">
    <span class="d-none d-lg-inline"></span>Logout</button></a>
  
</div>
  
</div>



  </div>
</nav>
  <div class="container mt-4">
<div class="row">
  
  <div class="col-md-8 mt-5">
 
<div class="table-responsive">
<table class="table text-dark">
  <thead>
    <tr>
      <th >Name</th>
      <th>price</th>
      <th>Quantity</th>
      <th>Total</th>
      <th >Update</th>
      <th>Delete</th>
    </tr>
  </thead>
  
  <?php
  error_reporting(0);
  session_start();
  if(!isset($_SESSION['Loginid']))
  {
    header("Location: registeruser.php");
  }
  include 'connection.php';
  $tenantid=$_SESSION['Loginid'];
  $query="select * from cartcount where tenantid='$tenantid'"; //query for retrieve data
  $runquery=mysqli_query($conn,$query);


  
  $pname=$_POST['pname'];
    $pprice=$_POST['pprice'];
    $pquantity=$_POST['pquantity'];

      //delete button
      if(isset($_POST['delete']))
      {
          $delete="delete from cartcount where productname='$pname' && tenantid='$tenantid'";
          $run=mysqli_query($conn,$delete);
          header("Location: viewcart.php");
      }
  
      //update button
      if(isset($_POST['update']))
      {
        $fprice=$pquantity*$pprice;
        $update="update cartcount set productquantity='$pquantity',producttotalamount='$fprice' where productname='$pname' && tenantid='$tenantid'";
        $run=mysqli_query($conn,$update);
        header("Location: viewcart.php");
      }
    while($row=mysqli_fetch_array($runquery))
    {
         
            ?>
            <form  method='post'>
            <tr>
  

            <td><input type='hidden' name='pname' value="<?php echo $row['productname']; ?>"> <?php echo $row['productname']; ?> </td>
            
            <td><input type='hidden' name='pprice' value=" <?php echo $row['productprice']; ?> "><?php echo $row['productprice']; ?> </td>
            
            <td><input type='text' name='pquantity' value="<?php echo $row['productquantity']; ?>"></td>
            <td><?php echo $row['producttotalamount']; ?></td>
            <td><button class='btn btn-info' name='update'>Update</button></td>
            <td><button class='btn btn-danger' name='delete'>Delete</button></td>
    

            </tr>
            
            </form>
     <?php
            // echo "
            
           
            // ";
            
        }

    

    ?>
    
  
    
</table>
</div>
  </div>
 
<div class="col-md-4 mt-5 pt-1 ps-4">
  <form action="insertcart.php" method="POST">

    <h3><b>SubTotal: </b></h3>
    <?php
    $query="select producttotalamount from cartcount where tenantid='$tenantid'";
    $runp=mysqli_query($conn,$query);
    $total=0;
    while($row=mysqli_fetch_array($runp))
    {
        $total+=$row['producttotalamount'];
    }
    echo "<h3><b>$total<b></h3>";
    ?>
    <input type="hidden" name="sub" value="<?php echo $total; ?>" ><br>
    <button name="buy" class="btn btn-success mt-2">Buy Now</button>
    
  </form>
  
</div>
<div>
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

<!-- go back -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

      </body>
</html>