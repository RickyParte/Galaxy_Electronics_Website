<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details Order</title>
    <link rel="shortcut icon" href="galaxy.svg" type="image/x-icon">
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
<body>
<!-- Navbar -->
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
<!-- Navbar -->
<div class="col-md-8 mt-5 ms-5 pt-4">
<h3><a href="retrieveorder.php"><i class="bi bi-arrow-left-circle-fill pe-3"></i></a>Go Back</h3>
</div>
<div class="container mt-5 pt-5">
<!-- Table For Retreive Order -->
<div class="table-responsive">
    <table class="table table-lg table-striped">
        <thead class="bg-danger text-light">
            <tr>
                                    <th>Product Name</th>
                                    <th>Price Per Product</th>
                                    <th>Quantity</th>
                                    <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php
            error_reporting(0);
            include 'connection.php';
          //  Click On View Order Button 
            if(isset($_POST['vieworder']))
            {
  
            $orderid=$_POST['orderid'];
          
            $query1="select * from purchaseorder where orderid='$orderid'";
            $runq=mysqli_query($conn,$query1);
            while($rowu=mysqli_fetch_array($runq))
            {
                ?>
                    <tr>
                        <td>
                            <h6 class="mb-0"><?php echo $rowu['productname']; ?></h6>
                        </td>
                        <td><?php echo $rowu['productprice']; ?></td>
                        <td><?php echo $rowu['productquantity']; ?></td>
                        <td><span class="font-weight-semibold"><?php echo $rowu['producttotalamount']; ?></span></td>
                    </tr>
                <?php
            }
        }
            ?>
                                
        </tbody>
    </table>
</div>
</div>
<!-- Link -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</body>
</html>
