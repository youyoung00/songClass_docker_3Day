<?php

$mysql_hostname = 'host.docker.internal';
$mysql_username = 'you889';
$mysql_password = 'semin';
$mysql_database = 'youDB';
$mysql_port = '55000';
$mysql_charset = 'UTF8';

$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database, $mysql_port, $mysql_charset);

if($conn->connect_error){
    echo("연결 실패 : " . $conn->connect_error);
} 

?>