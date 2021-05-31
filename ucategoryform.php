<?php 
  session_start(); 

   if (!isset($_SESSION['username'])) {
  	
  	header('location: form.php');
  }
  ?>
<!DOCTYPE html>
<html>
<head>
 
</head>
<body>
  <div class="header">
  	<h2>updateCategory</h2>
  </div>
	
  <form method="post" action="submitucategory.php">
  
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="uname" >
  	</div>
      <div class="input-group">
       <label>Id</label>
       <input type="number" name="id" >
       </div>
  	<div class="input-group">
  	  <label>description</label>
  	  <input type="text" name="udescription">
  	</div>
  
  	<div class="input-group">
  	  <button type="submit" class="btn" name="ucat_user">updatecategory</button>
  	</div>
  
  </form>
  </body>
</html>