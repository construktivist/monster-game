<?php
$serverName = "localhost";
$userName = "root";
$password = "r00t";


$connection = new mysqli($serverName, $userName, $password);


if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
echo "Connected successfully";
?>
