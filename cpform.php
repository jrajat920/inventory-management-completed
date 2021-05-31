<?php include ('login.php')?>
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
  	<h2>Change Password</h2>
  </div>
	 
  <form method="post" action="submitcpform.php">
  
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password1">
  	</div>
      <div class="input-group">
  		<label>New Password</label>
  		<input type="password" name="password2">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="cp_user">Change Password</button>
  	</div>

  </form>
</body>
</html>