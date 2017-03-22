<?php

$NAME = urldecode($_GET["monster-name"]);
$ATTACK = urldecode($_GET["monster-attack"]);
$TYPE = urldecode($_GET["monster-type"]);
$HP = 0;
$ATCK = 0;
$DEF = 0;

switch ($TYPE){
  case "fire":
    $HP = 10;
    $ATCK = 15;
    $DEF = 10;
    break;
  case "water":
    $HP = 10;
    $ATCK = 10;
    $DEF = 15;
    break;
  case "nature":
    $HP = 15;
    $ATCK = 10;
    $DEF = 10;
    break;
  default:
   echo "There is something wrong with the monster type.";
}

include "db.php";
$stmt = $connection->stmt_init();

$sql = "INSERT INTO monsters
  (name, type, attack, hp, atck, def)
  VALUES ('$NAME', '$TYPE', '$ATTACK', '$HP', '$ATCK', '$DEF')";

if ($stmt->prepare($sql))
{
  $stmt->execute();
  $stmt->close();
  header("Location: ../index.php");
}
else {
  echo "Error: " . $sql . " " . $connection->error;
}
