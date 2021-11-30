<?php
session_start();
if(!isset($_SESSION['IS_LOGIN']))
    {
	    header("Location: AdminAuthenticate.php");
    }
    
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galaxy Electronics</title>
  <link rel="shortcut icon" href="google.svg" type="image/x-icon">
</head>


<body >

<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
  <a class="navbar-brand text-white" href="#"> <i class="bi bi-lightbulb-fill text-white pe-3" style="font-size:25px;"></i><b>Galaxy Electronics</b></a>
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
          <a class="nav-link disable text-warning" aria-current="page" href="UpdateProducts.php"><i class="bi bi-arrow-up-circle-fill pe-3" style="color:white;"></i>Update Existing Products</a>
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
<!-- Navbar ended -->

<!-- Dashboards Cards -->
<div class="p-5 mt-3">
      <div class="container-fluid mt-3">
        <h4 class="text-dark"><i class="bi bi-house-door-fill me-2 mt-2"></i><b>DashBoard<b></h4>
        <!-- Row -->
        <div class="row pt-3">
          <!-- Column -->
        <div class="col-md-4 pt-2 pb-2">
          <!-- Card -->
      <div class="card" style="background-color:#0A99F0">
      <div class="card-body text-light">
      <div class="row">
      <div class="col">
          <i class="bi bi-bag-check" style="font-size:38px;color:red;"></i>
      </div>
       <div class="col-md-10">
          <h4 class="card-title h4">Total Orders Done</h4>
          <p class="card-text"><b>0</b></p>
       </div>
     </div>
     <div class="card-footer bg-transparent border-primary"></div>
      </div> 
    </div>
  </div>

  <div class="col-md-4 pt-2 pb-2">
    <div class="card" style="background-color:#2B6427">
      <div class="card-body text-light">
        <div class="row">
          <div class="col">
          <i class="bi bi-hand-thumbs-up-fill" style="font-size:38px;color:white;"></i>
          </div>
          <div class="col-md-10">
        <h5 class="card-title h4">Total Made Products</h5>
        <p class="card-text"><b>0</b></p>
        </div>
        </div>
        <div class="card-footer bg-transparent border-success"></div>
      </div>
    </div>
  </div>

  <div class="col-md-4 pt-2 pb-2">
    <div class="card" style="background-color:#F0DB0A">
      <div class="card-body text-dark">
      <div class="row">
          <div class="col"><i class="bi bi-bag-check-fill" style="font-size:38px;color:#0624E1;"></i></div>
          <div class="col-md-10">
            <h5 class="card-title h4">Products Solds</h5>
            <p class="card-text"><b>0</b></p>
        </div>
      </div>
      <div class="card-footer bg-transparent border-warning"></div>
      </div>
    </div>
  </div>

  </div>
  <div class="row pt-3">
          <!-- Column -->
          <div class="col-md-4 pt-2 pb-2">
    <div class="card" style="background-color:#F0DB0A">
      <div class="card-body text-dark">
      <div class="row">
          <div class="col"><i class="bi bi-cloud-minus" style="font-size:38px;color:#0624E1;"></i></div>
          <div class="col-md-10">
            <h5 class="card-title h4">Total Stock</h5>
            <p class="card-text"><b>0</b></p>
        </div>
      </div>
      <div class="card-footer bg-transparent border-warning"></div>
      </div>
    </div>
  </div>

  <div class="col-md-4 pt-2 pb-2">
    <div class="card" style="background-color:#2B6427">
      <div class="card-body text-light">
        <div class="row">
          <div class="col">
          <i class="bi bi-cpu-fill" style="font-size:38px;color:white;"></i>
          </div>
          <div class="col-md-10">
        <h5 class="card-title h4">New Products</h5>
        <p class="card-text"><b>0</b></p>
        </div>
        </div>
        <div class="card-footer bg-transparent border-success"></div>
      </div>
    </div>
  </div>
   

  <div class="col-md-4 pt-2 pb-2">
          <!-- Card -->
      <div class="card" style="background-color:#0A99F0">
      <div class="card-body text-light">
      <div class="row">
      <div class="col">
          <i class="bi bi-person-bounding-box" style="font-size:38px;color:red;"></i>
      </div>
       <div class="col-md-10">
          <h4 class="card-title h4">Employees</h4>
          <p class="card-text"><b>0</b></p>
       </div>
     </div>
     <div class="card-footer bg-transparent border-primary"></div>
      </div> 
    </div>
  </div>

</div>
<!-- Card Ended -->
<!-- Bar Graph of Work-->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="container pt-3">
  <h4 class="text-center"><b>Work Done</b></h4>
  <div>
    <canvas id="myChart" height="100" weight="100"></canvas>
  </div>
</div>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["2016", "2017", "2018", "2019", "2020", "2021"],
    datasets: [{
  
        label:'work in percentage',
      data: [56, 33, 54, 94, 44, 0],
      backgroundColor: "rgba(255,153,0,1)"
    }]
  }
});
</script>
<?php

?>
<!-- Graph Ended  -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
<link rel="stylesheet" href=".../css/style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</body>
</html>

