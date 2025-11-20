<?php
session_start();
if(isset($_POST['db_name'])){
    
$db_name = $_POST['db_name'];
}
$db_name = 'test123';
$msql = new mysqli('localhost', 'root', '', $db_name);
$query = "select * from `users` ";
$result = $msql->query($query);
$r = $result->fetch_all(MYSQLI_ASSOC);
echo '`<pre>';
print_r($r);
echo '`</pre>';


?>