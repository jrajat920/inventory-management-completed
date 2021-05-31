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
  	<h2>CreateCategory</h2>
  </div>
	
  <form method="post" action="submitccategory.php">
  
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="name">
  	</div>
  	<div class="input-group">
  	  <label>description</label>
  	  <input type="text" name="description" >
  	</div>
  
  	<div class="input-group">
  	  <button type="submit" class="btn" name="ccat_user">Createcategory</button>
  	</div>
  
  </form>
  </body>
</html>
