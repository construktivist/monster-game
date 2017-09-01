<<?php

require "create-enemy.php";

$monsterDamage = $_POST["monsterDamage"];

include "db.php";
$stmt = $connection->stmt_init();

$sql = "SELECT * FROM monsters WHERE name='$monsterDamage'";
$result = $connection->query($sql);

if ($result->num_rows > 0){
  while($row = $result->fetch_assoc()){

    $enemyMonster->battle($row["name"], $row["atck"]);


    // echo "<div class='col-xs-2'>
    //         <div class='panel panel-default'>
    //           <div class='panel-heading'>
    //             <h3 class='panel-title'>{$row["name"]}</h3>
    //           </div>
    //           <div class='panel-body'>
    //             Type: {$row["type"]} <br />
    //             Hit Points: {$row["hp"]} <br />
    //             Attack: {$row["atck"]} <br />
    //             Defense: {$row["def"]} <br />
    //             <button id='fight' class='btn btn-danger' value={$row["name"]}>Fight</button>
    //           </div>
    //         </div>
    // </div>";
  }
}

 ?>
