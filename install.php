<?php

//var_dump($_GET);

if(isset($_GET['database_name']) && !empty($_GET['database_name'])){
    
$database_name = $_GET['database_name'];
$conn = new  mysqli('localhost','root','');
$arr = $conn->query("use `hell`");
setcookie("name",'petko');
setcookie('age', 44);
setcookie('car', 'audi');
setcookie('mphone', 'xiomi');




var_dump($_COOKIE,$_SERVER);die;
//$conn =  new mysqli('localhost','root','',"$database_name");
if($conn->connect_error){
    var_dump($conn);
}else{
    echo "you connected";
}
$query = "create table if not exists`$database_name`.`users` "
        . "(`id` int not null auto_increment , `name` varchar(100) , primary key(`id`) )";
//$query = "CREATE TABLE `$database_name`.`users` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
echo "<br/>";
//die($query);
die;
if($conn->query($query)===true){
    echo "you created table users";
}else{
    echo "something go wrong";
}
//$conn->query($query);
echo "<a href='./forms/install_form.php'>install form</a>";
        
}
// var_dump($query);