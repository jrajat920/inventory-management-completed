<?php include('register.php') ?>
<?php include('connection.php') ?>
<?php
class signup
{
    public $id;
    public $username;
    public $email;
    public $password;
    private $hashpassword;
    function __construct()
    {
     $db = new connection().get_connection();
    }
    function checksignup()
    {
        if (isset($_POST['reg_user']))
        {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        }
        $hashpassword = md5($password);
        $query2 = "INSERT INTO user(email,username,password) VALUES($email,$username,$hashpassword)";
        $userquery = "SELECT * from user WHERE username = '$username' OR email = '$email'";
        $users = mysqli_query($db,$userquery);
        
        if(mysqli_num_rows($users) == 0)
        {
            $signup_result = mysqli_query($db,$query2);
            return $signup_result;
        }
        else
        {
            return False;
        }

    }
}