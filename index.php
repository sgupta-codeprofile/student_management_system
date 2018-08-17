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
       	<div class="col-sm-3"></div>
       		<div class="col-sm-3">
       			<!-- start form here -->
       			<form action="search_student.php" method="post" enctype="" >
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
       	<div class="col-sm-3"></div>
       	
       </div><!--end row for form -->


	</div><!-- end main container -->
</div><!-- end row first -->

</body>
</html>