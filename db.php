<?php

$host = 'projektpwcomysql.mysql.database.azure.com';
$user = 'projektpwco';
$password = 'Tojesthaslo123';
$dbname = 'projektpwcomysql';

$conn = mysqli_connect($host, $user, $password, $dbname);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());

}

?>
