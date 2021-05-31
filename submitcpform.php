<?php include ('cpform.php')?>
<?php include ('changepassword.php')?>
<?php //include ('connection.php')?>
<?php
$username = "";
$opassword = "";
$npassword = "";
$hashpassword2 = "";
if(isset($_POST['cp_user']))
{
      $username = ($_POST['username']);
      $opassword = ($_POST['password1']); 
      $npassword = ($_POST['password2']); 
      $hashpassword2 = md5($npassword);
      $object11 = new cp();
      $object11->changepassword($username,$opassword,$hashpassword2);
      
}

?>