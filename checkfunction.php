<?php include ('connection.php')?>
<?php include ('login.php')?>
<?php include ('category.php')?>
<?php include ('product.php')?>
<?php
$object1 = new signup();
$object2 = new login();
$object3 = new category();
$object4 = new connection();
$object5 = new product();
$object1->checksignup("rajat225","jrajat920@gmail.com","rajat123456");
$object2->checklogin("rajat225","rajat123456");
$object3->create_category(1,"mobiles","this category contains mobiles");
$object5->create_product(10,"samsung",25,20000);
?>