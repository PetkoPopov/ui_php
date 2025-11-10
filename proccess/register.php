<?php

session_start();
$_SESSION['db'] = 'test123';
$database_name = $_SESSION['db'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$repeat_password = $_POST['repeat_password'];
// to do validation 
//$database_name=$_POST['database'];
$msql = new mysqli('localhost', 'root', '', $database_name);
$password = sha1($password);
$repeat_password = sha1($repeat_password);
//  var_dump($password);die;
if ($password == $repeat_password) {
    $query = "Insert into $database_name.users (first_name , last_name , email , password ) value(?,?,?,? )";
    $stmt = $msql->prepare($query);
    $stmt->bind_param('ssss', $first_name, $last_name, $email, $password);
    if($stmt->execute()){
    header('Location:../index.php');
    }
    
} elseif ($password !== $repeat_password) {
    echo 'password does not match';
}
