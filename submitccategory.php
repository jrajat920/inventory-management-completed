<?//php include ('ccategoryform.php')?>
<?php include ('category.php')?>
<?php
$cname = "";
$description = "";
if(isset($_POST['ccat_user']))
{
      $cname = ($_POST['name']);
      $description = ($_POST['description']);  
      $object8 = new category();   
      $object8->create_category($cname,$description);
}
  
?>