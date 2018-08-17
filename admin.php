<?php 
session_start();
if($_SESSION['user']){echo "yes session variable found";}
else{header('location:login.php');}
?>

