<?php 

include 'database.php';
$test = new Users();

if(isset($_POST['action']) && $_POST['action'] == 'add'){
    $name = $_POST['S_name'];
    $email = $_POST['S_email'];
    $password = $_POST['S_password'];

    $test->addUser($name,$email,$password);
}

if(isset($_POST['action']) && $_POST['action'] == 'login'){
    $email = $_POST['L_email'];
    $password = $_POST['L_password'];

    $test->login($email,$password);
}


?>