<?php
session_start();
include 'connection.php';
// Check Login Is Done or not
    if(!isset($_SESSION['IS_LOGIN']))
    {
	    header("Location: AdminAuthenticate.php");
    }

    //Retrieve All Orders from db
    $query="select * from orders";
    $run=mysqli_query($conn,$query);
    $order=mysqli_num_rows($run);


    // Retrieve Sold Products from db
    $queryproduct="select * from purchaseorder";
    $runquery=mysqli_query($conn,$queryproduct);
    $soldproduct=mysqli_num_rows($runquery);


    // Retrieve Product Quantity from db
    $queryproduct="select * from newproduct";
    $runquery=mysqli_query($conn,$queryproduct);
    $totalproduct=mysqli_num_rows($runquery);

    // Retrieve Customers from db
    $queryproduct="select * from register";
    $runquery=mysqli_query($conn,$queryproduct);
    $customer=mysqli_num_rows($runquery);
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galaxy Electronics</title>
  <link rel="shortcut icon" href="galaxy.svg" type="image/x-icon">
</head>


<body style="background: linear-gradient(135deg, #9b59b6, #71b7e6);">

<!-- Navbar -->
<?php  include('AdminNavbar.php'); ?>
<!-- Navbar Ended -->

<!-- Dashboards Cards -->
<div class="p-5 mt-3">
      <div class="container-fluid mt-3">
        <h4 class="text-dark"><i class="bi bi-house-door-fill me-2 mt-2"></i><b>DashBoard<b></h4>
        <!-- Row -->
        <div class="row pt-3">
          <!-- Column -->
        <div class="col-md-4 pt-2 pb-2">
          <!-- Card -->
      <div class="card" style="background-color:#fff; border-radius:50px">
      <div class="card-body" style="color: #7d2ae8;">
      <div class="row">
      <div class="col">
          <i class="bi bi-bag-check" style="font-size:38px;color:red;"></i>
      </div>
      <div class="col-md-10">
          <h4 class="card-title h4">Total Orders Done</h4>
          <p class="card-text"><b><?php echo $order; ?></b></p>
      </div>
      </div>
      <div class="card-footer bg-transparent border-danger"></div>
    </div> 
    </div>
  </div>

  <div class="col-md-4 pt-2 pb-2">
    <div class="card" style="background-color:#fff; border-radius:50px">
      <div class="card-body" style="color: #7d2ae8;">
        <div class="row">
          <div class="col">
          <i class="bi bi-hand-thumbs-up-fill" style="font-size:38px;color:red;"></i>
          </div>
          <div class="col-md-10">
        <h5 class="card-title h4">Total Made Products</h5>
        <p class="card-text"><b>0</b></p>
        </div>
        </div>
        <div class="card-footer bg-transparent border-danger"></div>
      </div>
    </div>
  </div>

  <div class="col-md-4 pt-2 pb-2">
    <div class="card" style="background-color:#fff; border-radius:50px">
      <div class="card-body" style="color: #7d2ae8;">
      <div class="row">
          <div class="col"><i class="bi bi-bag-check-fill" style="font-size:38px;color:red;"></i></div>
          <div class="col-md-10">
            <h5 class="card-title h4">Products Solds</h5>
            <p class="card-text"><b><?php echo $soldproduct; ?></b></p>
        </div>
      </div>
      <div class="card-footer bg-transparent border-danger"></div>
      </div>
    </div>
  </div>

  </div>
  <div class="row pt-3">
          <!-- Column -->
          <div class="col-md-4 pt-2 pb-2">
    <div class="card" style="background-color:#fff; border-radius:50px">
      <div class="card-body" style="color: #7d2ae8;">
      <div class="row">
          <div class="col"><i class="bi bi-cloud-minus" style="font-size:38px;color:red;"></i></div>
          <div class="col-md-10">
            <h5 class="card-title h4">Total Customers</h5>
            <p class="card-text"><b><?php echo $customer; ?></b></p>
        </div>
      </div>
      <div class="card-footer bg-transparent border-danger"></div>
      </div>
    </div>
  </div>

  <div class="col-md-4 pt-2 pb-2">
    <div class="card" style="background-color:#fff; border-radius:50px">
      <div class="card-body" style="color: #7d2ae8;">
        <div class="row">
          <div class="col">
          <i class="bi bi-cpu-fill" style="font-size:38px;color:red;"></i>
          </div>
          <div class="col-md-10">
        <h5 class="card-title h4">Total Products</h5>
        <p class="card-text"><b><?php echo $totalproduct; ?></b></p>
        </div>
        </div>
        <div class="card-footer bg-transparent border-danger"></div>
      </div>
    </div>
  </div>

  <div class="col-md-4 pt-2 pb-2">
          <!-- Card -->
      <div class="card" style="background-color:#fff; border-radius:50px">
      <div class="card-body" style="color: #7d2ae8;">
      <div class="row">
      <div class="col">
          <i class="bi bi-person-bounding-box" style="font-size:38px;color:red;"></i>
      </div>
        <div class="col-md-10">
          <h4 class="card-title h4">Employees</h4>
          <p class="card-text"><b>11</b></p>
        </div>
    </div>
    <div class="card-footer bg-transparent border-danger"></div>
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
<!-- Links -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
<link rel="stylesheet" href=".../css/style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</body>
</html>

