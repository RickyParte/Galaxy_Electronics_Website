<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['Loginid']))
{
    header("Location: registeruser.php");
}
include 'connection.php';
$name=$_POST['pname'];
$price=$_POST['pprice'];
$quantity=$_POST['pquantity'];
if(isset($_SESSION['Loginid']))
{
    $tid=$_SESSION['Loginid'];
   
}
 function add($tid,$name,$price,$quantity)
 {
     include 'connection.php';
    $amount=$price*$quantity;
            
            $que="insert into cartcount (tenantid,productname,productprice,productquantity,producttotalamount) values ('$tid','$name','$price','$quantity','$amount')";
            $runq=mysqli_query($conn,$que);

 }

 function updatecart($tid,$name,$price,$quantity)
 {
     include 'connection.php';
     $fprice=$quantity*$price;
    $update="update cartcount set productquantity='$quantity',producttotalamount='$fprice' where productname='$name' && tenantid='$tid'";
    $rune=mysqli_query($conn,$update);
    // header("Location: cart.php");
 }



if(isset($_POST['addtocart']))
{
   
    $search="select * from cartcount where productname='$name' && tenantid='$tid'";
    $qs=mysqli_query($conn,$search);
    $row=mysqli_fetch_array($qs);
    $updatequantity=$row['productquantity']+1;
    if(mysqli_num_rows($qs)<=0)
    {
        add($tid,$name,$price,$quantity);
        header("Location: cart.php");
    }
    else{
        updatecart($tid,$name,$price,$updatequantity);
        header("Location: cart.php");
    }
}



if(isset($_POST['buy']))
{
   header("Location: order.php");
}

if(isset($_POST['moreinfo']))
{
    header("Location: shoppingcart.php");
}



?>
