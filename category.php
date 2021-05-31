<?php include ('connection.php')?>
<?php
class category
{
    public $id;
    public $cname;
    public $description;
    
    function __construct()  
    {
    $dbx = new connection();
     $this->db = $dbx->get_connection();
    if (!$this->db) {
        die("Connection failed: " . mysqli_connect_error());
      }
    }
  function create_category($cname,$description)
{
  $query = "INSERT INTO category(name,description) VALUES('$cname','$description')";
  $createc = mysqli_query($this->db,$query);
  if($createc == True)
  {
    echo "Success";
  }
  else
  {
    echo "No Success";
  }
}
function update_category($id,$cname,$description)
{
  $updatec = "UPDATE category SET name = '$cname', description = '$description' WHERE id = $id";
  $resultc = mysqli_query($this->db,$updatec);
  if($resultc == True)
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