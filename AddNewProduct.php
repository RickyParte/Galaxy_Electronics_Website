<?php
session_start();
//check Login 
if(!isset($_SESSION['IS_LOGIN']))
{
  header("Location: AdminAuthenticate.php");
}
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Add New Products</title>
    <link rel="stylesheet" href="css/style1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="galaxy.svg" type="image/x-icon">
  </head>

<body style="background: linear-gradient(135deg, #9b59b6, #71b7e6);">
<!-- Navbar -->
<?php  include('AdminNavbar.php'); ?>
<!-- Navbar Ended -->

<!-- Row for Goback  -->
<div class="col-md-9 mt-5 ms-5 pt-4">
<h3><a href="admin.php"><i class="bi bi-arrow-left-circle-fill pe-3"></i></a>Go Back</h3>
</div>
<!-- End Row GO back -->

<!-- Add new Product Form -->
<div class="col-md-6 ms-auto me-auto" style="margin-top:100px; margin-bottom:30px;">
    <div class="card ms-3 me-3">
    
      <div class="container ">
        <div class="title">Add New Products</div>
          <div class="content">
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="user-details">
                <div class="input-box">
                  <span class="details">
                    Product ID
                  </span>
                  <input type="text" name="productidd" placeholder="Enter Product Id" required>
                </div>
              <div class="input-box">
              <span class="details">Product Watt</span>
              <input type="text" name="productwatt" placeholder="Enter Product Price" required>
          </div>
          <div class="input-box">
            <span class="details">Product name</span>
            <input type="text" name="productnamee" placeholder="Enter Product Name" required>
          </div>
          <div class="input-box">
            <span class="details">Product Price</span>
            <input type="text" name="productpricee" placeholder="Enter Product Price" required>
          </div>
          <div class="input-box">
            <span class="details">Product Waranty</span>
            <input type="text" placeholder="Enter Product Waranty" name="productwaranty" required>
          </div>
          <div class="input-box">
            <span class="details">Select image to upload:</span>
            <!-- <form action="" method="post" enctype="multipart/form-data"> -->
            <input type="file" name="productimgg" id="fileToUpload">
            <!-- <input type="submit" value="Upload Image" name="submit"> -->
    </div>
    <div class="input-box">
            <span class="details">Product Feature 1</span>
            <input type="text" name="productfeatureone" placeholder="Enter Feature 1" required>
          </div>

          <div class="input-box">
            <span class="details">Product Feature 2</span>
            <input type="text" name="productfeaturetwo" placeholder="Enter Feature 2" required>
          </div>
    

          <div class="input-box">
            <span class="details">Product Feature 3</span>
            <input type="text" name="productfeaturethree" placeholder="Enter Feature 3" >
          </div>

    
          <div class="input-box">
            <span class="details">Product Feature 4</span>
            <input type="text" name="productfeaturefour" placeholder="Enter Feature 4" >
          </div>
        </div>
    
          
        <div class="button">
          <input type="submit" name="submitt" value="SUBMIT">
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<!-- End Add New Products Form -->
</div>
  
<!-- Links -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>  
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- Links Ended -->
</body>
</html>

<?php
error_reporting(0);

include 'connection.php';
// Add New Products Button
if(isset($_POST['submitt'])){

  // Get data from Form
  $productid=$_POST['productidd'];
  $productname=$_POST['productnamee'];
  $productprice=$_POST['productpricee'];
  $productimg=$_FILES['productimgg'];
  $productfeatureone=$_POST['productfeatureone'];
  $productfeaturetwo=$_POST['productfeaturetwo'];
  $productfeaturethree=$_POST['productfeaturethree'];
  $productfeaturefour=$_POST['productfeaturefour'];
  $waranty=$_POST['productwaranty'];
  $productwat=$_POST['productwatt'];
  // print_r($productimg);

  $filename=$productimg['name'];
  $filepath=$productimg['tmp_name'];
  $fileerror=$productimg['error'];

  if($fileerror==0){
    $destfile='upload/'.$filename;
    // echo "$destfile";
    move_uploaded_file($filepath,$destfile);
    
    // Insert Query 
    $insertquery="INSERT INTO newproduct(productid,productwatt, productname, productprice, productimg,productwaranty,productfeatureone,productfeaturetwo,productfeaturethree,productfeaturefour)
    VALUES ('$productid','$productwat','$productname','$productprice','$destfile','$waranty','$productfeatureone','$productfeaturetwo','$productfeaturethree','$productfeaturefour')";
    $res=mysqli_query($conn,$insertquery);
    if($res){
    ?>
      <script>
        swal("Good job!", "Successfully Added!", "success");  
        window.location.href="Products.php";
      </script> 
    <?php

    }else{
    ?>
      <script>
        swal("Oops!", "Something went wrong, Retry Again!", "error");  
      </script>
    <?php

  }
  }
  
}

?>