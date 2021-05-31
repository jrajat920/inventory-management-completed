<?php
class cp
{
public $username;
public $opassword;
public $npassword;
public $hashpassword2;
function __construct()  
{
$dbx = new connection();
 $this->db = $dbx->get_connection();
if (!$this->db) {
    die("Connection failed: " . mysqli_connect_error());
  }
}
function changepassword($username,$opassword,$hashpassword2)
{
    $updatep = "UPDATE user SET password = '$hashpassword2' WHERE username = '$username'";
    $resultp = mysqli_query($this->db,$updatep);
    if($resultp == True)
  {
    echo "success";
  }
}
}