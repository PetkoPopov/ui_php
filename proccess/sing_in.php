<?php

session_start();
if (isset($_POST['db_name'])) {

    $db_name = $_POST['db_name'];
}
$email = $_POST['email'];
$password = $_POST['password'];
$password = sha1($password);
$db_name = 'test123';
$msql = new mysqli('localhost', 'root', '', $db_name);
$query = "select * from `users` ";
$result = $msql->query($query);
$r = $result->fetch_all(MYSQLI_ASSOC);

foreach ($r as $key => $userArr) {

    if ($email == $userArr['email'] && $password == $userArr['password']) {
        echo "you in succcessfuly :)";
        
        $_SESSION['token'] = time();
        echo $_SESSION['token'];
    }
}
?>