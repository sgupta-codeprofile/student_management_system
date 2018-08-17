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
          	<div class="col-sm-4">
        		 <form action="#" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                     <label for="roll number">Student ID/UID:</label>
                     <input type='number' name="uid" class="form-control" required="required">
                    </div>
                    <button type="submit" name="checkflag" class="btn btn-primary">Update student detail</button>
                  </form>
                  <br>
                  <a href="logout.php"><button style="float: left;" type="button" class="btn btn-danger">Logout</button></a>

        	</div>
        	<!-- left colomn -->
        	<div class="col-sm-6">
        		<?php
                if (isset($_POST['checkflag'])) {
                    include('dbcon.php');
                    $uid=$_POST['uid'];               
                     $query="SELECT *  FROM student WHERE id='$uid'";
                     $run=mysqli_query($con,$query);
                    if ($run== True) {  //query check if
                            $result=mysqli_fetch_assoc($run); ?>
                             <form action="update.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                     <label for="uid">uid:</label>
                     <input type='number' readonly value="<?php echo $result['id']; ?>" name="uid" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                     <label for="roll number">Roll number:</label>
                     <input type='number' value="<?php echo $result['roll_number']; ?>" name="roll_number" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                     <label for="name">Studet name:</label>
                     <input type="text" value="<?php echo $result['name']; ?>" name='student_name' class="form-control" required="required">
                     </div>
                     <div class="form-group">
                     <label for="city">City</label>
                     <input type="text" value="<?php echo $result['city']; ?>" name="city" class="form-control" required="required" >
                    </div>
                    <div class="form-group">
                     <label for="parentscontact">Parents contact</label>
                     <input type="text" value="<?php echo $result['parents_contact']; ?>" name="parent_contact" class="form-control" required="required" >
                    </div>
                    <div class="form-group">
                    <label for="Standard">Standard</label>
                     <input type="text" value="<?php echo $result['standard']; ?>" name="standard" class="form-control" required="required" >
                   </div>
              
                    <button type="submit" name="checkflag" class="btn btn-primary">Update</button>
                 </form>
                 <?php
                    }//end query check if
                    else
                    {
                        echo "Somethig wrong";
                    }

                 }
                ?>

        	</div>
        	<!-- end left colomn -->
        </div>
	<!-- end form -->

</body>
</html>

