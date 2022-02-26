<?php 

session_start();

$mysql_hostname = 'host.docker.internal';
$mysql_username = 'you889';
$mysql_password = 'semin';
$mysql_database = 'youDB';
$mysql_port = '55000';
$mysql_charset = 'UTF8';

$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database, $mysql_port, $mysql_charset);

if($conn->connect_errno){
    echo '[연결실패..] : '.$connect->connect_error.'';
} 

?>
