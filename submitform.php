
<?php include ('form.php')?>
<?php
  $username1 = "";
  $password1 = "";
  $password = "";
  $hashpassword3 = "";
if(isset($_POST['login_user']))
{
	$username1 = ($_POST['username']);
	$password1 = ($_POST['password']);
	$hashpassword3 = md5($password); 
$object7 = new signup();
$object7->checklogin($username1,$password1,$hashpassword3);
}
?>