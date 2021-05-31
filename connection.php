<?php
class connection
  {
    function __construct()
    {
      $db = mysqli_connect('localhost', 'root', '', 'newtutorial');
      $this->db = $db;
    }
    function get_connection()
    {
      return $this->db;
}
}
?>