<?php include ('login.php')?>
<?php 
  //session_start(); 

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
  	<h2>CreateProduct</h2>
  </div>
	
  <form method="post" action="submitcproduct.php">
  
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="pname" >
  	</div>
  	<div class="input-group">
  	  <label>quantity</label>
  	  <input type="number" name="quantity" value="<?php echo $quantity; ?>">
  	</div>
	  <div class="input-group">
  	  <label>price</label>
  	  <input type="number" name="price" value="<?php echo $price; ?>">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="cpro_user">CreateProduct</button>
  	</div>
  
  </form>
  </body>
</html>