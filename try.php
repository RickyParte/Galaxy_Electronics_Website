<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <button name="check" class="btn btn-primary">Try Me</button>
</form>
</body>
</html>
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
                                session_start();
                                $tenantid=$_SESSION['Loginid'];
                                $tenantidx=strtoupper($tenantid);;
                                include 'connection.php';
                                $query1="SELECT * FROM `purchaseorder` where tenanid='$tenantidx'";
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