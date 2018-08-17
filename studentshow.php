<?php 
session_start();

if($_SESSION['user']){}
else{header('location:login.php');}
?>
<?php 
if (isset($_POST['check_flag'])) {
include('dbfunctions.php');
$result=ShowStudentDetail();
} //start of main if
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
        	<!--center area -->
        	<div class="col-sm-4">
        		<form  action="#" method="post">
        		
                 <button style="margin-top: 20px;" type="submit" name="check_flag" class="btn btn-primary">Show</button>
                </form><BR>
        	            <?php if (isset($_POST['check_flag'])) {   ?>
        	           
                            <table class="table table-dark table-hover">
                             <thead>
                              <tr>
                              <th>Id</th>
        						<th>Roll</th>
        						<th>Name</th>
        						<th>City</th>
        						<th>Contact</th>
        						<TH>Standard</TH>
       							<th>Image</th>
       						   
      							</tr>
    							</thead>
    							<tbody>
    							<?php	foreach ($result as $key => $value) { ?>

                                   <tr>
                                    <td><?php echo $value['id']; ?></td>
                                    <td><?php echo $value['roll_number']; ?></td>
                                    <td><?php echo $value['name']; ?></td>
                                    <td><?php echo $value['city']; ?></td>
                                    <td><?php echo $value['parents_contact']; ?></td>
                                    <td><?php echo $value['standard']; ?></td>
                                    <td><?php echo $value['image']; ?></td>
                                   </tr>
                           <?PHP    }  ?>
                                     </tbody>
                                      </table>

                             <?php   }  ?>
                   </div>
        	<!--end ceter area -->
        	<!-- left colomn -->
        	<div class="col-sm-4">
        		<a href="logout.php"><button style="margin-top: 20px;" type="button" class="btn btn-danger">Logout</button></a>


        	</div>
        	<!-- end left colomn -->
        </div>
	<!-- end form -->

</body>
</html>


