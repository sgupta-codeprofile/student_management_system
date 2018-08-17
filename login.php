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

<?php 
if (isset($_POST['login'])) {
 

include ('dbcon.php');
$username=$_POST['username'];
$pass=$_POST['pass'];
$query="SELECT * FROM admin where username='$username' and password='$pass'";
$run=mysqli_query($con,$query);
if ($run == True) {
  $nrow=mysqli_num_rows($run);
    if ($nrow<1) {
             ?>
             <script type="text/javascript">
               window.alert("user does not exist:");
               window.open('login.php');
             </script>
             <?php
    }
    else
    {
          session_start();
          $result=mysqli_fetch_assoc($run);
          $_SESSION['id']=$result['id'];
          $_SESSION['user']=$result['username'];
          header('location:admin.php');
    }
}
else
{echo "<h2>Something wrong with query: </h2>";}

}
?>