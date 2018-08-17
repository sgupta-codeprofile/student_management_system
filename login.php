<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<?php include_once("css/bootstrapelib.php") ?>
</head>
<body>
	<!-- start division for header -->
      <div class="row">
		<div class="col-sm-12">
          <?php include_once("header.php") ?>
	    </div>
       </div>  
     <!-- end division for header -->
     <!-- start division for login form -->
	    <div class="row">
	    	<div class="col-sm-3"></div>
	    	<div class="col-sm-6">
	    		 <form action="login.php" method="post">
                    <div class="form-group">
                     <label for="email">Enter username:</label>
                     <input type="text" name="username" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                     <label for="pwd">Password:</label>
                     <input type="password" name="pass" class="form-control" required="required">
                    </div>
                     <button type="submit" class="btn btn-primary" name="login">Login</button>
                   </form>
	    	</div>
	    	<div class="col-sm-3"></div>
	    </div>
     <!-- end division for form -->
</body>
</html>

