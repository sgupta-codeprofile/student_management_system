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


function ShowStudentDetail()
{
	global $con;
	$query="SELECT * FROM student ";
	$run=mysqli_query($con,$query);
	if ($run==True) {
                $allresult=array();
		        while ($result=mysqli_fetch_assoc($run)) {
		        	$allresult[]=$result;
		        }
		        return $allresult;
		        	}
	else{return False;}
}
function DeleteStudent($uid)
{
	global $con;
	$query="DELETE  FROM student WHERE id='$uid'";
	$run=mysqli_query($con,$query);
	if($run==True)
	{
		return True;
	}
	else
	{
		return False;
	}
}

?>