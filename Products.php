<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
  <link rel="shortcut icon" href="galaxy.svg" type="image/x-icon">
</head>

<body>
<?php include 'AdminNavbar.php' ?>
<div class="col-md-9 mt-5 ms-4 pt-5">
<a href="admin.php"><h3><i class="bi bi-arrow-left-circle-fill pe-3"></i>Go Back</h3></a>
</div>
<div class="container mt-3">
  <div class="table-responsive">
  <table class="table">
<link rel="stylesheet" href="css/tablestyle.css">

  <thead>
    <tr>
    <th>Sr No.</th>
      <th>Product ID</th>
      <th>Product Name</th>
      <th>Product Price</th>
      <th>Product Feature</th>
      <th>Product Image</th>
      <th>Action<th>
    </tr>
  </thead>
  
  <tbody>
      <?php
      error_reporting(0);
      session_start();
      if(!isset($_SESSION['IS_LOGIN']))
      {
            header("Location: AdminAuthenticate.php"); 
      }
      include 'connection.php';
      $selectquery="SELECT * FROM newproduct";
      $query=mysqli_query($conn,$selectquery);
    //   $result=mysqli_fetch_array($query);
      while($result=mysqli_fetch_array($query)){
          ?>
         <tr>
           <td><?php echo $result['srno']; ?></td>
             <td><?php echo $result['productid']; ?></td>
             <td><?php echo $result['productname']; ?></td>
             <td><?php echo $result['productprice']; ?></td>
             <td>
              <?php 
              echo $result['productfeatureone'].'<br>';
              echo $result['productfeaturetwo'].'<br>';
              echo $result['productfeaturethree'].'<br>';
              echo $result['productfeaturefour'].'<br>';
              ?>
              </td>
             <td><img src="<?php echo $result['productimg']; ?>" width="100" height="100"> </td>
             <td><?php echo "<a href='delete.php?id=$result[srno]'><i class='bi bi-trash-fill h3 text-danger'></i></a>"; ?></td>

      </tr>
         <?php
      }
      //Delete Products
      if(isset($_POST['delete']))
      {
        $id=$_POST['pid'];
        $del="delete from newproduct where productid='$pid'";
        $run=mysqli_query($del);
        if($run)
        {
          echo "<script>alert('Product Deleted');</script>";
        }
      }
      ?>
</tbody>
</table>
  </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>