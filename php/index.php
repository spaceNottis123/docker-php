<?php
$host = 'db'; //service name from docker-compose.yml
$user = 'devuser';
$password = 'devpass';
$db = 'test_db';

$conn = new mysqli($host,$user,$password,$db);
if($conn->connect_error){
    echo 'connection failed' . $conn->connect_error;
}

echo 'Sucessfully connected to Mysql';
?>
