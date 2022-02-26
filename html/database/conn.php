<?php
$servername = "host.docker.internal";
$username = "db_id";
$password = "db_password";
$mysql_database = 'db_name';
$mysql_port = '52000';
$mysql_charset = 'UTF8';

// Create connection
$conn = new mysqli($servername, $username, $password,$mysql_database, $mysql_port, $mysql_charset);

?>