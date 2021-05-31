
<?php include ('register.php')?>
<?php

  $username = "";
  $email = "";
  $password = "";
  $hashpassword2 = "";
  if(isset($_POST['reg_user']))
  {
	$username = ($_POST['username']);
	$email = ($_POST['email']);
	$password = ($_POST['password']);
	$hashpassword2 = md5($password);  
   $object6 = new signup();
  
echo $object6->checksignup($username,$email,$password,$hashpassword2);
  }
?>