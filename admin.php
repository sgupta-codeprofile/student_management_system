<?php 
session_start();
if($_SESSION['user']){echo "yes session variable found";}
else{header('location:login.php');}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin pannel</title>
	<?php include_once('css/bootstrapelib.php'); ?>
</head>
<body>
	<div class="row">
		<div class="col-sm-12">
		<?php  include_once('header.php'); ?>
	    </div>
	</div>
	<!-- start form -->
        <div class="row">
        	<div class="col-sm-4"></div>
        	<div class="col-sm-4">
        		 <form action="admin.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                     <label for="roll number">Roll number:</label>
                     <input type='number' name="roll_number" class="form-control">
                    </div>
                    <div class="form-group">
                     <label for="name">Studet name:</label>
                     <input type="text" name='student_name' class="form-control">
                     </div>
                     <div class="form-group">
                     <label for="city">City</label>
                     <input type="text" name="city" class="form-control" >
                    </div>
                    <div class="form-group">
                     <label for="parentscontact">Parents contact</label>
                     <input type="text" name="parent_contact" class="form-control" >
                    </div>
                    <div class="form-group">
                     <label for="sel1">Select standard:</label>
                     <select name="standard" class="form-control">
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     </select>
                   </div>
                   <div class="form-group">
                   	  <label for="student_image">Upload student image</label>
                   	  <input type="file" name="student_image" class="form-control">
                   </div>

                    <button type="submit" name="checkflag" class="btn btn-primary">Add student detail</button>
                 </form>

        	</div>
        	<div class="col-sm-4"></div>
        	
        </div>
	<!-- end form -->

</body>
</html>
<?php
if (isset($_POST['checkflag'])) {

$RollNumber=$_POST['roll_number'];
$StudentName=$_POST['student_name'];
$StudentCity=$_POST['city'];
$ParentsContact=$_POST['parent_contact'];
$StudetStandard=$_POST['standard'];
$Studet_Image_Name=$_FILES['student_image']['name'];  //for image
$Temp_Image=$_FILES['student_image']['tmp_name']; //for temp image
include('dbcon.php');  
  $query="INSERT INTO `student`(`id`, `roll_number`, `name`, `city`, `parents_contact`, `standard`, `image`)     VALUES (NULL,'$RollNumber','$StudentName','$StudentCity','$ParentsContact','$StudetStandard','$Studet_Image_Name')";
  $run=mysqli_query($con,$query);

   if ($run == True) {
       move_uploaded_file($Temp_Image,'images/$Studet_Image_Name.png');
   	   echo "Student Detail Successfully Entered:";
                     }
   else {
   	   echo "something wrong with query";
        }

}

?>

