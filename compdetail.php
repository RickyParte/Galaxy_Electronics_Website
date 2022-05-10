<!DOCTYPE html>
<head>
  <title>Component</title>
  <link rel="shortcut icon" href="galaxy.svg" type="image/x-icon">
</head>
<html>
  <body>
      <a href="componentadd.php"><h5 class="ms-2">Back</h5></a>
<table class="table table table-hover table-stripped table-warning">
<thead >
   <tr>
    <th scope="col">Driver</th>
      <th scope="col">Driver Quantity</th>
      <th scope="col">PCB</th>
      <th scope="col">PCB Quantity</th>
      <th scope="col">Housing</th>
      <th scope="col">Housing Quantity</th>
      </tr>
  </thead>
  <tbody>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
     
      <?php
      session_start();
      // Check Login
       if(!isset($_SESSION['IS_LOGIN']))
       {
             header("Location: AdminAuthenticate.php");
       }
      include 'connection.php';
      error_reporting(0);
      $selectquery="SELECT * FROM stock_comp";
      $query=mysqli_query($conn,$selectquery);
    //   $result=mysqli_fetch_array($query);
      while($result=mysqli_fetch_array($query)){
          ?>
         <tr>
             <tbody>
             <td><?php echo $result['driver']; ?></td>
             <td><?php echo $result['driverquantity']; ?></td>
             <td><?php echo $result['pcb']; ?></td>
             <td><?php echo $result['pcbquantity']; ?></td>
             <td><?php echo $result['housing']; ?></td>
             <td><?php echo $result['housingquantity']; ?></td>
      </tbody>
             </tr>
         <?php
      }
      ?>
</tbody>
</table>
</body>
</html>