<?php include ('login.php')?>
<?php 
  //session_start(); 

  if (!isset($_SESSION['username']))
   {
  	header('location: form.php');
  }
  if (isset($_GET['logout'])) 
  {
    
    unset($_SESSION['username']);
  	session_destroy();
  	
  	header('location: form.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>

<div>
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <?php echo $_SESSION['username']; ?></p>
    	<p> <a href="index.php?logout='1'" name="logout">logout</a> </p>
      
    <?php endif ?>
</div>
<p>
  		Create Category? <a href="ccategoryform.php">Create Category</a>
  	</p>
    <p>
  		Update Category? <a href="ucategoryform.php">Update Category</a>
  	</p>
    <p>
  		Create Product? <a href="cproductform.php">Create Product</a>
  	</p>
    <p>
  		Update Product? <a href="uproductform.php">Update Product</a>
  	</p>
<p>
  		Change Password? <a href="cpform.php">Change Password</a>
  	</p>
	  <p>
  		Show Category? <a href="selectcategory.php">Show Category</a>
  	</p>
	  <p>
	  Show Product? <a href="selectproduct.php">Show Product</a>
	  </p>
	  <p>
	  Join Category and Product ? <a href="join.php">Join</a>
	  </p>
</body>
</html>