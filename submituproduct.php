
<?php include ('uproductform.php')?>

<?php
$id = "";
$name = "";
$quantity = "";
$price = "";
if(isset($_POST['upro_user']))  
{     $id = ($_POST['id']);
      $name = ($_POST['pname']);
      $quantity = ($_POST['quantity']); 
      $price = ($_POST['price']); 
      $object10 = new product();
      $object10->update_product($id,$name,$quantity,$price);
      
}

?>