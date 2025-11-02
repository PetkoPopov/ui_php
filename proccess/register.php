<?php
var_dump($_POST);

$first_name =$_POST['first_name'];
$last_name  =$_POST['last_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$repeat_password=$_POST['repeat_password'];
// to do validation 

echo "</br>";
 var_dump(sha1($password));
 echo '<br>';
 var_dump(sha1($repeat_password));  