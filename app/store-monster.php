<?php

$NAME = urldecode($_GET["monster-name"]);
$ATTACK = urldecode($_GET["monster-attack"]);
$TYPE = urldecode($_GET["monster-type"]);

include "db.php";
$stmt = $connection->stmt_init();

$sql = "INSERT INTO monsters
  (name, type, attack, hp, atck, def)
  VALUES ('$NAME', '$TYPE', '$ATTACK', 10, 15, 10)";

if ($stmt->prepare($sql))
{
  $stmt->execute();
  $stmt->close();
  echo "Monster successfully created";
}
else {
  echo "Error: " . $sql . " " . $connection->error;
}

 ?>
