<?php

include('dbcon.php');

// fuction for insert the data from admin pannel
function insertstudentdata($RollNumber,$StudentName,$StudentCity,$ParentsContact,$StudetStandard,$Studet_Image_Name)
{
	global $con;
	$query="INSERT INTO `student`(`id`, `roll_number`, `name`, `city`, `parents_contact`, `standard`, `image`)     VALUES (NULL,'$RollNumber','$StudentName','$StudentCity','$ParentsContact','$StudetStandard','$Studet_Image_Name')";
    $run=mysqli_query($con,$query);
    if($run== True){return True;}
    else{return False;}
}

?>