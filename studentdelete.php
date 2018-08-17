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
        		<button id="custombuttonset" type="submit"  class="btn btn-primary">Delete student detail</button><br>
        		<button id="custombuttonset" type="submit"  class="btn btn-primary">update student detail</button>
        	</div>
        	<!-- end left colomn -->
        	<!--center area -->
        	<div class="col-sm-4">
        		<form  action="studentdelete.php" method="post">
        		<div class="form-group">
                 <label for="roll number">Enter the Roll-Number of student</label>
                  <input type="number" name="student_rollnumber" class="form-control">
                </div>
                <div class="form-group">
                 <label for="pwd">Enter Student Name:</label>
                  <input type="text" name="student_name" class="form-control">
                </div>
                 <button type="submit" name="check_flag" class="btn btn-primary">Search</button>
                </form>
        	</div>
        	<!--end ceter area -->
        	<!-- left colomn -->
        	<div class="col-sm-4">
        		<a href="logout.php"><button style="margin-top: 20px;margin-left: 200px;" type="button" class="btn btn-danger">Logout</button></a>


        	</div>
        	<!-- end left colomn -->
        </div>
	<!-- end form -->

</body>
</html>