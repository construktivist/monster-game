<?php

$name = $_POST["name"];
//echo $name;

include "db.php";
$stmt = $connection->stmt_init();

$sql = "SELECT * FROM monsters WHERE name='$name'";
$result = $connection->query($sql);

if ($result->num_rows > 0){
  while($row = $result->fetch_assoc()){

    echo "<div class='col-xs-2'>
            <div class='panel panel-default'>
              <div class='panel-heading'>
                <h3 class='panel-title'>{$row["name"]}</h3>
              </div>
              <div class='panel-body'>
                Type: {$row["type"]} <br />
                Hit Points: {$row["hp"]} <br />
                Attack: {$row["atck"]} <br />
                Defense: {$row["def"]} <br />
                <button class='btn btn-danger' value={$row["name"]}>Select and Fight</button>
              </div>
            </div>
    </div>";
  }
}

else{
  echo "Error: " . $sql . "<br>" . $connection->error;
}

 ?>
