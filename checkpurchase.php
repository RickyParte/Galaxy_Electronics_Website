<?php
session_start();
include 'connection.php';
// Check Login
if(!isset($_SESSION['Loginid']))
{
  header("Location: registeruser.php");
}
// Query For Retrieve For Client
$orderid=$_POST['orderid'];
$tenantid=$_SESSION['Loginid'];
$query="select * from orders where tenantid='$tenantid' && orderid='$orderid'";
$run=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($run))
{
$name=$row['firstname'].' '.$row['lastname'];
$email=$row['email'];
$mobile=$row['mobile'];
$address=$row['address'];
$pin=$row['pincode'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Purchase</title>
    <link rel="shortcut icon" href="galaxy.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="js/pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

</head>

<body>
    <div class="container d-flex justify-content-center mt-50 mb-50">
        <div class="row">
        
        <a href="PurchaseHistory.php"><h3><i class="bi bi-arrow-left-circle-fill pe-3"></i>Go Back</h3></a>

            <div class="col-md-12 text-right  mb-3">
                <button class="btn btn-primary mt-3" id="download"> download pdf</button>
                <a href="exit.php"><button class="btn btn-primary mt-3">Log Out</button></a>
            </div>
            <div class="col-md-12">
                <div class="card" id="invoice">
                    <div class="card-header bg-transparent header-elements-inline">
                        <h2 class="card-title text-danger text-center">Galaxy Electronics</h2>
                        <h5 class="card-title text-primary text-center">Email: galaxyelectronics@gmail.com</h5>
                        <h5 class="card-title text-primary text-center">Mobile No: 8830994756/8208435604</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-11">
                                <div class="mb-4 ">
                                    <div class="text-sm-right">
                                        <ul class="list list-unstyled mb-0">
                                            <b>
                                            <li>Date: <span class="font-weight-semibold"><?php echo date("Y-m-d"); ?></span></li>
                                            </b>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex flex-md-wrap">
                            <div class="mb-4 mb-md-2 text-left"> <span class="text-primary">Receipt To:</span>
                                <ul class="list list-unstyled mb-0">
                                    <b>
                                    <li>
                                        <h5 class="my-2">Name: <?php echo $name; ?></h5>
                                    </li>
                                    <li>Email: <?php echo $email; ?> </li>
                                    <li>Mobile: <?php echo $mobile; ?></li>
                                    <li>Address: <?php echo $address; ?></li>
                                    <li>Pin: <?php echo $pin; ?></li>
                                    </b>
                                </ul>
                            </div>
                            <div class="mb-2 ml-auto"> <span class="text-primary">From:</span>
                                <div class="d-flex flex-wrap wmin-md-400">
                                    <ul class="list list-unstyled mb-0 text-left">
                                        <li>
                                            <h5 class="my-2">Galaxy Electronics</h5>
                                        </li>
                                        <b>
                                        <li>Proprietor: Rajesh Walhekar</li>
                                        <li>Address: Survey no 137 , maulikrupa building</li>
                                        <li>shop no.04 ,opp Ganesh mangal karyalay </li>
                                        <li>Sinhgadd,Sinhgad road</li>
                                        <li>City: Pune</li>
                                        <li>Pin Code: 411068</li>
                                        </b>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Price Per Product</th>
                                    <th>Quantity</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'connection.php';
                                $query1="select * from purchaseorder where tenanid='$tenantid' && orderid='$orderid'";
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
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body">
                        <div class="d-md-flex flex-md-wrap">
                            <div class="pt-2 mb-3 wmin-md-400 ml-auto">
                                <h6 class="mb-3 text-left">Total due</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                        <?php
                                            
                                            $query="select * from orders where tenantid='$tenantid' && orderid='$orderid'";
                                            $run=mysqli_query($conn,$query);
                                            while($row=mysqli_fetch_assoc($run))
                                            {
                                               
                                                ?>
                                                <tr>
                                                    <th class="text-left">Subtotal:</th>
                                                    <td class="text-right"><?php echo $row['amount']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="text-left">GST Tax: <span class="font-weight-normal">(18%)</span></th>
                                                    <td class="text-right"><?php echo $row['gst']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="text-left">Total:</th>
                                                    <td class="text-right text-primary">
                                                    <h5 class="font-weight-semibold"><?php echo $row['finalamount']; ?></h5>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                               
                        </div>
                    </div>
                    <div class="card-footer text-center"> <span>Thank You For Purchasing Product From Galaxy Electronics.</span> </div>
                </div>
            </div>
        </div>
    </div>









</body>

</html>