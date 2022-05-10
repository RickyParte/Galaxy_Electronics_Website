
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style2.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body style="background: linear-gradient(135deg, #9b59b6, #71b7e6);">
  <?php
  session_start();
  if(!isset($_SESSION['IS_LOGIN']))
    {
	    header("Location: Admin.php");
    }
  include('AdminNavbar.php'); 
 
  ?>
 
  <div class="col-md-9 mt-5 ms-5 pt-4">
<h3><a href="admin.php"><i class="bi bi-arrow-left-circle-fill pe-3"></i></a>Go Back</h3>
</div>

<div class="col-md-6 ms-auto me-auto" style="margin-top:70px; margin-bottom:30px;">
    <div class="card ms-3 me-3">
    
    <div class="container ">
    <div class="title">Update Products</div>
    <div class="content">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Product ID</span>
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
         
          </div>
        <div class="button">
          <input type="submit" name="submitt" value="SUBMIT">
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>  
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</body>
</html>

<?php

// error_reporting(0);
include ('connection.php');

if(isset($_POST['submitt'])){

  $productid=$_POST['productidd'];
  $productname=$_POST['productnamee'];
  $productprice=$_POST['productpricee'];
  $productimg=$_FILES['productimgg'];
  $productwarranty=$_POST['productwarranty'];
  $productfeature=$_POST['productfeaturee'];

  // print_r($productimg);

  $filename=$productimg['name'];
  $filepath=$productimg['tmp_name'];
  $fileerror=$productimg['error'];

  if($fileerror==0){
    $destfile='upload/'.$filename;
    // echo "$destfile";
    move_uploaded_file($filepath,$destfile);
  

    $updatequery="update newproduct SET productname='$productname',productprice='$productprice',productwaranty='$productwarranty',productimg='$destfile' WHERE productid= '$productid'";
  $res=mysqli_query($conn,$updatequery);

  if($res){
    ?>
    <script>
       alert("YES");
     </script>
     <?php

   }else{
     ?>
     <script>
       alert("No");
     </script>
      <?php
   }
   }
  }
  

?>