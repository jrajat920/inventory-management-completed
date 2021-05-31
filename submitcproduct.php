
<?//php include ('cproductform.php')?>
<?php include ('product.php')?>
<?php
$name = "";
$quantity = "";
$price = "";
if(isset($_POST['cpro_user']))
{
      $name = ($_POST['pname']);
      $quantity = ($_POST['quantity']); 
      $price = ($_POST['price']); 
      $object9 = new product();
      $object9->create_product($name,$quantity,$price);
      
}

?>