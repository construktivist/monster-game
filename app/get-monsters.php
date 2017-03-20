<?php


include "db.php";
$stmt = $connection->stmt_init();

$sql = "SELECT * FROM monsters";
$result = $connection->query($sql);

if ($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    echo $row["name"] . "\n";
    echo $row["type"] . "\n";
    echo $row["attack"] . "\n";
    echo $row["hp"] . "\n";
    echo $row["atck"] . "\n";
    echo $row["def"] . "\n";
  }
}

 ?>
