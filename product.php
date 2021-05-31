<?php include ('connection.php')?>
<?php
 
class product
  {
    public $id;
    public $name;
    public $quantity;
    public $price;
    function __construct()  
    {
      $dbx = new connection();
      $this->db = $dbx->get_connection();
     if (!$this->db) {
         die("Connection failed: " . mysqli_connect_error());
       }
    }
    function join_twotables()
    {
      $query5 = "SELECT * FROM category INNER JOIN `product management` ON category.id = `product management`.id";
      $join = mysqli_query($this->db,$query5);
    } 
    function create_product($name,$quantity,$price)
    {
      $cmd = "INSERT INTO `product management`(name,quantity,price) VALUES('$name','$quantity','$price')";
      $create = mysqli_query($this->db,$cmd);
      if($create == True)
      {
        echo "Successfull";
      }
      else
      {
        echo "NOt Successfull";
      }
    }
    function update_product($id,$name,$quantity,$price)
    {
      echo $id;
      $update = "UPDATE `product management` SET name = '$name',quantity = $quantity , price = $price WHERE id =$id";
      $result = mysqli_query($this->db,$update);
      echo $update;
      echo $result;
      if($result == True)
      {
        echo "Success";
      }
      else
      {
        echo "No Success";
      }
    }

  }
  ?>