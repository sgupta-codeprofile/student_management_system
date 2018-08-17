<?php
include('dbcon.php');
$uid=$_POST['uid'];
$RollNumber=$_POST['roll_number'];
$StudentName=$_POST['student_name'];
$StudentCity=$_POST['city'];
$ParentsContact=$_POST['parent_contact'];
$StudetStandard=$_POST['standard'];

$query="UPDATE `student` SET `roll_number` = '$RollNumber', `name` = '$StudentName', `city` = '$StudentCity', `parents_contact` = '$ParentsContact', `standard` = '$StudetStandard' WHERE `student`.`id` = $uid";
$run=mysqli_query($con,$query);
if ($run==True) {
	?>
        <script type="text/javascript">
        	window.alert('update successfully');


        </script>
         
	<?php
	echo "<a href='admin.php'>Home</a>";
}
else
{
	echo "something went wrong";
}



?>