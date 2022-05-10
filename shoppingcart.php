<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="galaxy.svg" type="image/x-icon">
  <title>Products</title>
</head>

<body class="bg-dark">
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

<div class="container mt-3">

<link rel="stylesheet" href="css/tablestyle.css">


      <?php
      error_reporting(0);
      session_start();
      if(!isset($_SESSION['Loginid']))
      {
            header("Location: registeruser.php");
      }
      include 'connection.php';
      $id=$_GET['ids'];
      $selectquery="select * from newproduct where srno='$id'";
      $query=mysqli_query($conn,$selectquery);
    //   $result=mysqli_fetch_array($query);
      while($result=mysqli_fetch_array($query)){
        ?>
        <div class="card text-center">
        <div class="card-header text-primary fs-3">
         <b> <?php echo $result['productname']; ?></b>
        </div>
        <div class="card-body text-start">
     
          <div class="row">
          <div class="col">
          <img src="<?php echo $result['productimg'] ?>" class="img-fluid" width="430px" alt="...">
          </div>
         <div class="col">
          <h5 class="card-title text-danger "><b>Product Name: <?php echo $result['productname']; ?></b></h5>
          <p class="card-text fs-6"><b>Product Price: <?php echo $result['productprice']; ?> RS.</b></p>
          <p class="fs-6"><b>Product Watt: <?php  echo $result['productwatt']; ?> WATT.</b></p>
          <p class="fs-6"><b>Product Waranty: <?php  echo $result['productwaranty']; ?> Years.</b></p>
          <p class="fs-6"><b>Product Features: <?php  echo $result['productfeatureone']; ?></b></p>
          <p class="fs-6">
            <b>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp
              <?php echo $result['productfeaturetwo']; ?>
            </b>
          </p>
          <p class="fs-6">
            <b>
              &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp
              <?php echo $result['productfeaturethree']; ?>
            </b>
          </p>
          <p class="fs-6">
            <b>
              &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp
              <?php echo $result['productfeaturefour']; ?>
            </b>
          </p>
          <a href="cart.php" class="btn btn-primary">Go to Cart</a>
          </div>
        </div>
        
        </div>
    
        <div class="card-footer text-success">
          Galaxy Electronics
        </div>
      </div>
      <?php
      }
      ?>

  </div>
</div>
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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>