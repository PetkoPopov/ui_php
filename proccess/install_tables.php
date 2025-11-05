<?php


//if(isset($_GET['database_name']) && !empty($_GET['database_name'])){
    
$database_name = $_GET['database'];


$conn =  new mysqli('localhost','root','' , "$database_name");

$query = "create table if not exists`$database_name`.`users` "
        . "(`id` int not null auto_increment ,"
        . " `first_name` varchar(100) ,"
        . "`last_name` varchar(100),"
        . "`email` varchar(100),"
        . "`password` varchar(100), primary key(`id`) )";
//$query = "CREATE TABLE `$database_name`.`users` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
echo "<br/>";


if($conn->query($query)===true){
    header("Location:../index.php?database=<?=$database_name?>");
}else{
    echo "something go wrong";
//$conn->query($query);
echo "<a href='./forms/install_form.php'>install form</a>";
}
        
//}