<?php include ('connection.php')?>
<?//php include ('form.php')?>
<?php
session_start(); 
class signup
{
    public $id;
    public $username;
    public $email;
    public $password;
    private $hashpassword; 
    private $db;
    private $conn;
    function __construct()  
    {
    $dbx = new connection();
     $this->db = $dbx->get_connection();
    if (!$this->db) {
        die("Connection failed: " . mysqli_connect_error());
      }
    }
    function checksignup($username,$email,$password,$hashpassword)
    {
        /*if (isset($_POST['reg_user']))
        {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        }*/
      
        $hashpassword = md5($password);
        $query2 = "INSERT INTO user(email,username,password) VALUES('$email','$username','$hashpassword')";
        $userquery = "SELECT * from user WHERE username = '$username' OR email = '$email'";
        $users = mysqli_query($this->db,$userquery);
        if(mysqli_num_rows($users) == 0)
        {  
            if (mysqli_query($this->db, $query2)) {
                header('location: form.php');
                return "New record created successfully";    
              } else {
                return "Error: " . $query2 . "<br>" . mysqli_error($this->db);
              } 
            //$signup_result = mysqli_query($this->db,$query2);
            //return $signup_result;
        }
        else
        {
            return False;
        }

    }
    function checklogin($username1,$password1,$hashpassword1)
    {
        if(isset($_POST['login_user']))
        {
            $username1 = $_POST['username'];
            $password1 = $_POST['password'];
        }
        $hashpassword1 = md5($password1);
        $loginquery = "SELECT * from user WHERE username = '$username1' AND password = '$hashpassword1'";
        $login = mysqli_query($this->db,$loginquery);
        if(mysqli_num_rows($login))
        {session_start(); 
            $_SESSION['username'] = $username1;
        header('location: index.php');
           
            
            echo "Login Success";
            
            exit;
        //exit;}
    }
}
     /*== 1)
        {
            
            $_SESSION['username'] = $username;
            header('location: index.php');
            echo "Login Success";

        }
        else
        {
            
            echo "Login failure";
        }
    }
}*/
}
   
