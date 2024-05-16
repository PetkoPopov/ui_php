<?php

//var_dump($_GET);

if(isset($_GET['database_name']) && !empty($_GET['database_name'])){
    
$database_name = $_GET['database_name'];

$conn =  new mysqli('localhost','root','',"$database_name");
if($conn->connect_error){
    var_dump($conn);
}else{
    echo "you connected";
}
//$query = "create table '$database_name'.'users' "
//        . "('id' int null auto_increment , 'name' varchar(100) ,primary_key('id') )";
$query = "CREATE TABLE `$database_name`.`users` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
echo "<br/>";
die($query);
$conn->query($query);
echo "<a href='./forms/install_form.php'>install form</a>";
        
}
 var_dump($query);