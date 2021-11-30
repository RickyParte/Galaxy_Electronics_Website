<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
</head>

<body>
<div class="col-md-9 mt-5 ms-5 pt-4">
<h3><a href="admin.php"><i class="bi bi-arrow-left-circle-fill pe-3"></i></a>Go Back</h3>
</div>
<table class="content-table">
<link rel="stylesheet" href="css/tablestyle.css">

  <thead>
    <tr>
      <th>Product ID</th>
      <th>Product Name</th>
      <th>Product Price</th>
      <th>Product Key</th>
      <th>Product Image</th>
    </tr>
  </thead>
  
  <tbody>
      <?php
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
             <td><?php echo $result['productid']; ?></td>
             <td><?php echo $result['productname']; ?></td>
             <td><?php echo $result['productprice']; ?></td>
          
             <td><img src="<?php echo $result['productimg']; ?>" width="100" height="100"> </td>
      </tr>
         <?php
      }
      ?>
</tbody>
</table>
</body>
</html>