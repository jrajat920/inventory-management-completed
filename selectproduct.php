<?php include ('connection.php')?>
<?php
  
  $dbx = new connection();
   $db = $dbx->get_connection();
  if (!$db) {
      die("Connection failed: " . mysqli_connect_error());
  }
$select_product = "SELECT * FROM `Product Management`";
$result = mysqli_query($db, $select_product);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. "  - Price: " . $row["price"]."  - Quantity: "  .$row["quantity"]. "<br>";
  }
} else {
  echo "0 results";
}
?>

