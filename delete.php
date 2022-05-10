<?php
include 'connection.php';
// Delete Products
$id=$_GET['id'];
$delete="Delete from newproduct where srno='$id'";
$run=mysqli_query($conn,$delete);
if($run)
{
    echo "<script>alert('Delete Product Successfully');</script>";
    header("Location: Products.php");
}
else{
    echo "<script>alert('Not Deleted');</script>";
}
?>