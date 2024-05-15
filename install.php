<?php

//var_dump($_GET);

$conn =  new mysqli('localhost','root','');
if($conn->connect_error){
    var_dump($conn);
}else{
    echo "you connected";
}
if(isset($_GET['database_name']) && !empty($_GET['database_name'])){
    
$database_name = $_GET['database_name'];

$query = "create database $database_name";
$conn->query($query);
echo "<a href='./forms/install_form.php'>install form</a>";
        
}
 var_dump($query);