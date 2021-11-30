<?php session_start();
unset($_SESSION['Loginid']);
header("Location: index.php");
session_destroy();
 ?>