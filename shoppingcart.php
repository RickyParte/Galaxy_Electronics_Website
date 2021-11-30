<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>

<body>
    <div class="container">
        
 <div class="row">

<?php

include 'connection.php';
$query="select * from newproduct";
$run=mysqli_query($conn,$query);
$count=mysqli_num_rows($run);
if($count>0)
{
    while($row=mysqli_fetch_array($run))
    {
        ?>

<div class="col-md-6 mt-2 pb-2">
<div class="card " style="background-color: #FAFA33;">
<div class="row g-0">
    <div class="col-md-6">
      <img src="<?php echo $row['productimg']; ?>" class="img-fluid" alt="...">
    </div>
    <div class="col-md-6">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['productname']; ?></h5>
        <h6 class="card-title"><b>RS. <?php echo $row['productprice']; ?></b></h6>
        <h6 class="card-title"><b>Waranty: <?php echo $row['productwaranty']; ?></b></h6>
        <hr>
        <!-- <h6 class="card-title"><b>Features: </b></h6> -->
        <h6 class="card-title"><b> <?php echo $row['productfeatureone']; ?>   <?php echo $row['productfeaturethree']; ?></b></h6>
        <h6 class="card-title"><b> <?php echo $row['productfeaturetwo']; ?>    <?php echo $row['productfeaturefour']; ?></b></h6>
        <a href="#" class="btn btn-danger">Add To Cart</a>
      </div>
    </div>
  </div>
</div>
    </form>
</div>
<?php
}
}
?>
</div>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>