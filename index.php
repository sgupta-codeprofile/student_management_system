<?php 
if (isset($_POST['submit'])) {
include('dbfunctions.php');
$standard=$_POST['standard'];
$result=ShowStandardStudents($standard);
} //start of main if
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student management system</title>
	<!-- bootstrape online library -->
       <?php include_once("css/bootstrapelib.php") ?>
	<!-- end bootstrape online library -->
</head>
<body>
<div class="row"> <!-- row first -->
	<div class="col-sm-12"> <!-- main container -->	
         <?php include_once("header.php") ?><br>
       <div class="row"><!-- row for form -->
       	
       		<div class="col-sm-4">
       			<!-- start form here -->
       			<form action="#" method="post" enctype="" >
                   <div class="form-group">
                     <label for="sel1">Select Class:</label>
                     <select name="standard" class="form-control">
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     </select>
                   </div>
                   
                   <button type="submit" class="btn btn-primary" name="submit">Show Student</button>
                 </form>
                 <!-- end form here -->
       		</div>
       	<div class="col-sm-8">
                 <?php if (isset($_POST['submit'])) {   ?>
                     
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
                  <?php foreach ($result as $key => $value) { ?>

                                   <tr>
                                    <td><?php echo $value['id']; ?></td>
                                    <td><?php echo $value['roll_number']; ?></td>
                                    <td><?php echo $value['name']; ?></td>
                                    <td><?php echo $value['city']; ?></td>
                                    <td><?php echo $value['parents_contact']; ?></td>
                                    <td><?php echo $value['standard']; ?></td>
                                    <td><img src="images/<?php echo $value['image']; ?>" width="100px" height="100px"></td>
                                   </tr>
                           <?PHP    }  ?>
                                     </tbody>
                                      </table>

                             <?php   }  ?>
        </div>
       	
       </div><!--end row for form -->


	</div><!-- end main container -->
</div><!-- end row first -->

</body>
</html>