<?php 
session_start();
if($_SESSION['user']){}
else{header('location:login.php');}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin pannel</title>
	<?php include_once('css/bootstrapelib.php'); ?>
	<style type="text/css">
			#custombuttonset{margin-top:20px;margin-left: 100px;}
	</style>

</head>
<body>
	<div class="row">
		<div class="col-sm-12">
		<?php  include_once('header.php'); ?>
	    </div>
	</div>
	<!-- start form -->
        <div class="row">
        	<!-- start left colomn -->
        	<div class="col-sm-4">
        		<a href="studentshow.php"><button id="custombuttonset" type="submit" name="checkflag" class="btn btn-primary">Show all student</button></a><br>
        		<a href="studentdelete.php"><button id="custombuttonset" type="submit" name="checkflag" class="btn btn-primary">Delete student R</button></a><br>
        		<a href="updatestudent.php"><button id="custombuttonset" type="submit" name="checkflag" class="btn btn-primary">update student detail</button></a>
        	</div>
        	<!-- end left colomn -->
        	<div class="col-sm-4">
        		 <form action="admin.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                     <label for="roll number">Roll number:</label>
                     <input type='number' name="roll_number" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                     <label for="name">Studet name:</label>
                     <input type="text" name='student_name' class="form-control" required="required">
                     </div>
                     <div class="form-group">
                     <label for="city">City</label>
                     <input type="text" name="city" class="form-control" required="required" >
                    </div>
                    <div class="form-group">
                     <label for="parentscontact">Parents contact</label>
                     <input type="text" name="parent_contact" class="form-control" required="required" >
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
                   	  <input type="file" name="student_image" class="form-control" required="required">
                   </div>

                    <button type="submit" name="checkflag" class="btn btn-primary">Add student detail</button>
                 </form>

        	</div>
        	<!-- left colomn -->
        	<div class="col-sm-4">
        		<a href="logout.php"><button style="margin-top: 20px;margin-left: 200px;" type="button" class="btn btn-danger">Logout</button></a>


        	</div>
        	<!-- end left colomn -->
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
include('dbfunctions.php');
$run=insertstudentdata($RollNumber,$StudentName,$StudentCity,$ParentsContact,$StudetStandard,$Studet_Image_Name);

   if ($run == True) {
       move_uploaded_file($Temp_Image,"images/$Studet_Image_Name");
   	   ?>
   	   <script type="text/javascript">window.alert("Student data insert successfully")</script>
   	   <?php
                     }
   else {echo "something wrong with query";}

}

?>

