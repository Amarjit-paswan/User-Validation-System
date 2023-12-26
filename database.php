<?php 
session_start();
class Users{
    private $db_connection = '';

    public function __construct()
    {
        $this->db_connection = new mysqli('localhost','root','','login_resitration');

        if($this->db_connection->connect_error){
            die('Connection Failed');
        }
    }

    public function addUser($name,$email,$password){
        $sql_email = "SELECT * FROM user WHERE email = '$email'";
        $result_email = $this->db_connection->query(($sql_email));

        if($result_email->num_rows > 0){
            echo "exists";
            die();
        }else{
            $sql_add = "INSERT INTO user (full_name,email,password) VALUES ('$name','$email','$password')";
            $result_add = $this->db_connection->query($sql_add);
    
            if($result_add){
                return true;
            }else{
                die('Query Failed');
            }
        }
       
    }

    public function login($email,$password){
        $sql_login = "SELECT * FROM user WHERE email = '$email' || password = '$password'";
        $result_login = $this->db_connection->query($sql_login);

        if(!$result_login->num_rows > 0){
            echo "Invalid";
            // die('Query Failed');
        }else{
            $sql = "SELECT full_name FROM user WHERE email = '$email'";
            $result = $this->db_connection->query($sql);

            $data = $result->fetch_assoc();

            $_SESSION['email'] = $data['full_name'];

        }
    }
}

?>