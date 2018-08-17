<?php

$con=mysqli_connect("localhost","root","","student_management");

if($con==True){echo "connected";}
else{echo "connection error";}
?>