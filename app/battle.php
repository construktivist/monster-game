<<?php

require "create-enemy.php";
require "run-battle.php";

$name = $_POST["name"];

include "db.php";
$stmt = $connection->stmt_init();

$sql = "SELECT * FROM monsters WHERE name='$name'";
$result = $connection->query($sql);

if ($result->num_rows > 0){
  while($row = $result->fetch_assoc()){

    $playerMonster = new Monster(
      $row["attack"],
      $row["atck"],
      $row["def"],
      $row["hp"],
      $row["name"],
      $row["type"]
    );
  }
}


$runBattle = new Battle;

$runBattle->startBattle($playerMonster, $enemyMonster);




 ?>
