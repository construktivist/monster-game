<?php

$url = getenv('JAWSDB_URL');
$dbparts = parse_url($url);

$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');

$connection = new mysqli($hostname, $username, $password, $database);

  // $serverName = "localhost";
  // $userName = "root";
  // $password = "r00t";
  // $database = "monsters_db";
  // $connection = new mysqli($serverName, $userName, $password, $database);



if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
//echo "Connected successfully.\n" ;
