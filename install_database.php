<?php

//var_dump($_GET);
$host = 'localhost';
$user='root';
$pass='';
//var_dump($_POST);die;
   $database_name=$_POST['database_name'];   
   
    $msql = new mysqli($host,$user,$pass);
    $query = "Create database if not exists `$database_name` ";
    $msql->query($query);
    //var_dump($_GET);die;
   $msql->close();
$conn= new mysqli($host,$user,$pass,$database_name); 

$query = "create table if not exists`$database_name`.`users` "
        . "(`id` int not null auto_increment ,"
        . " `first_name` varchar(100) ,"
        . "`last_name` varchar(100),"
        . "`email` varchar(100),"
        . "`password` varchar(100), primary key(`id`) )";
//$query = "CREATE TABLE `$database_name`.`users` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
echo "<br/>";


if($conn->query($query)===true){
    header('Location:./forms/register.php');
}else{
    echo "something go wrong";
//$conn->query($query);
echo "<a href='./forms/install_database.php'>install form</a>";
}
        

    $msql->close();
//    header("Location:./proccess/install_tables.php");