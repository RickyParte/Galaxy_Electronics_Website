<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<script>
function addCart() {
  alert("Item Added Into Cart Successfully.......");
}
</script>
<body style="background-color: black;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example"> 
    <div class="container">
      <a class="navbar-brand text-info" href="#"><strong>Galaxy Electronics</strong></a>
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
        <a href="#" id="share-wa" class="sharer button"><i class="fa fa-3x fa-whatsapp"></i></a>
<a href="#" id="share-em" class="sharer button"><i class="fa fa-3x fa-envelope-square"></i></a>
<a href="tel:+918928007199" id="share-em" class="sharer button"><i class="fa fa-3x fa-phone-square"></i></a>

</div>
      </div>
    </div>
  </nav>
  <?php
  session_start();
  $count=0;
include 'connection.php';
  if(!isset($_SESSION['Loginid']))
    {
      header("Location: registeruser.php");
    }
    $tenant=$_SESSION['Loginid'];
    $query="Select * from cartcount where tenantid='$tenant'";
    $runq=mysqli_query($conn,$query);
    $count=mysqli_num_rows($runq);
  ?>
<nav class="navbar navbar-light text-center ms-auto">
  <div class="container">
    <form method="POST" class="d-flex col-md-8">
      <input class="form-control me-2"  name="search" placeholder="Search">
     
      <button class="btn btn-outline-success"  name="submit" type="submit">Search</button>
    </form>
    <div class="col-md-4">
    <a href="viewcart.php"><button class="btn btn-warning"><i class="bi bi-cart-plus-fill pe-2"></i>My Cart(<?php echo $count; ?>)</button></a>
    <a href="exit.php"><button class="btn btn-primary">Log Out</button></a>
    </div>
  </div>
</nav>

<div class="container mt-2 mb-2">

    
	<div class="row">

    <?php
    include('connection.php');
    if(isset($_POST['submit']))
    {
    $c=$_POST['search'];
   
    $query="select * from newproduct where productname like '%$c%'";
    
    $run=mysqli_query($conn,$query);
    $count=mysqli_num_rows($run);
    if($count>0)
    {
        while($row=mysqli_fetch_array($run))
        {
          
            ?>
		
  <div class="col-md-3  mt-2 pb-2">
    <form action="insertcart.php" method="POST">
    <div class="card" style="background-color:   #FAFA33;">
    <img class="card-img-top img-fluid " width="250px" height="250px" src="<?php echo $row['productimg']; ?>" alt="Card image cap">
      <div class="card-body text-center">
      <h6 class="card-title"><b><?php echo $row['productname']; ?></b></h6>
        <h6 class="card-text pt-1"> <b> Price: RS. <?php echo $row['productprice']; ?> </b></h6>
        <h6 class="card-text"> <b> Waranty: <?php echo $row['productwaranty']; ?> Years </b></h6>
        <p class="card-text"> </p>
        <input type="hidden" name="pname" value=" <?php echo $row['productname']; ?> ">
        <input type="hidden" name="pprice" value=" <?php echo $row['productprice']; ?> ">
        <input type="hidden" name="pwaranty" value=" <?php echo $row['productwaranty'] ?> ">
        <input type="hidden" name="pquantity" value="1">
      <button class="btn btn-danger" name="addtocart" onclick="addCart()"><i class="bi bi-cart-plus-fill pe-2"></i>Add To Cart</button>
      </div>
    </div>
        </form>
  </div>

	<?php		
 
		}
	}
  else{
    echo "<div class='text-warning text-center'>No Results Found</div>";
  }
}

else
{
  
  $query="select * from newproduct";
  $run=mysqli_query($conn,$query);
  $count=mysqli_num_rows($run);
  if($count>0)
  {
      while($row=mysqli_fetch_array($run))
      {
          ?>
  
<div class="col-md-3 mt-2 pb-2">
  <div class="card " style="background-color: #FAFA33;">
  <form action="insertcart.php" method="POST">
  <img class="card-img-top img-fluid " width="250px" height="250px" src="<?php echo $row['productimg']; ?>" alt="Card image cap">
    <div class="card-body text-center text-dark">
    <h6 class="card-title"><b><?php echo $row['productname']; ?></b></h6>
        <h6 class="card-text pt-1"> <b> Price: RS. <?php echo $row['productprice']; ?> </b></h6>
        <h6 class="card-text"> <b> Waranty: <?php echo $row['productwaranty']; ?> Years </b></h6>
        <p class="card-text"> </p>
        <input type="hidden" name="pname" value=" <?php echo $row['productname']; ?> ">
        <input type="hidden" name="pprice" value=" <?php echo $row['productprice']; ?> ">
        <input type="hidden" name="pwaranty" value=" <?php echo $row['productwaranty'] ?> ">
        <input type="hidden" name="pquantity" value="1">
      <button class="btn btn-danger" name="addtocart" onclick="addCart()"><i class="bi bi-cart-plus-fill pe-2"></i>Add To Cart</button>

    </div>
  </div>
      </form>
</div>
<?php
}
  }
}
?>
</div>
</div>



        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</body>
</html>