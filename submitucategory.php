<?php include ('ucategoryform.php')?>
<?php include ('category.php')?>
<?php
$cname = "";
$description = "";
if(isset($_POST['ucat_user']))
{
      $cname = ($_POST['uname']);
      $description = ($_POST['udescription']); 
      $id = ($_POST['id']);
      $object9 = new category();
      $object9->update_category($id,$cname,$description);
      
}

?>