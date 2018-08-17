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
        	
        	</div>
        	<!-- end left colomn -->
        	<div class="col-sm-4">
        		 <form action="#" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                     <label for="roll number">Student ID/UID:</label>
                     <input type='number' name="uid" class="form-control" required="required">
                    </div>
                    <button type="submit" name="checkflag" class="btn btn-primary">Delete student detail</button>
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
    
    $uid=$_POST['uid'];
    include('dbfunctions.php');
    $result=DeleteStudent($uid);
    if($result==True){
        ?><script type="text/javascript">
            window.alert('Data delelted successfully');
            window.open('admin.php')
        </script>
        <?php
    }
    else
    {
        ?>
        <script type="text/javascript">
            alert('something went wrong or enter true uid');
            window.open('admin.php');
        </script>
        <?php
    }
}
?>