<?php include ('connection.php')?>
<?php
    
  
  $dbx = new connection();
   $db = $dbx->get_connection();
  if (!$db)
 {
      die("Connection failed: " . mysqli_connect_error());
 }
    
      $query5 = "SELECT pm.id AS pd, pm.name AS pname, pm.price AS pprice, pm.quantity AS pquantity, c.name AS cname FROM `product management` AS pm INNER JOIN category AS c ON c.id = pm.category_id";
      $result = mysqli_query($db,$query5);
      if ($result->num_rows > 0) 
      {
        
        while($row = $result->fetch_assoc()) {
             echo "id: ". $row["pname"]." ". $row["pprice"]. $row["pquantity"]. $row["cname"]. "<br>" ;
        }
          }
         else {
          echo "0 results";
        }
?>