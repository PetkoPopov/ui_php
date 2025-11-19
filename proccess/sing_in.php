<?php
session_start();
$db_name = $_POST['db_name'];
$msql = new mysqli('localhost', 'root', '', $db_name);
$query = "select * from `users` ";
$result = $msql->query($query);
$r = $result->fetch_all(MYSQLI_ASSOC);
echo '`<pre>';
print_r($r);
echo '`</pre>';

?>