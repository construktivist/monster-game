<?php
$serverName = "localhost";
$userName = "root";
$password = "r00t";
$database = "monsters_db";


$connection = new mysqli($serverName, $userName, $password, $database);


if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
//echo "Connected successfully.\n" ;
