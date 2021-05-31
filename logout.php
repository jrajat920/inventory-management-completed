
<?php
if (isset($_GET['logout'])) 
  {
    echo "hello";
    unset($_SESSION['username']);
  	session_destroy();
  	
  	header('location: form.php');
  }
  ?>