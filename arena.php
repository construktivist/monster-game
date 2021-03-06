<!DOCTYPE html>
<html>
<!-- Head view -->
<?php require "./views/head.php" ?>
<!-- Body -->
  <body>
    <div class="container">
      <!-- Nav view -->
        <?php require "./views/nav.php" ?>
      <!-- Builds enemy monster to fight -->
      <div class="row">
        <?php

          require "./app/create-enemy.php";

          echo "<div class='col-xs-2'>
                  <div class='panel panel-default'>
                    <div class='panel-heading'>
                      <h3 class='panel-title'>{$enemyMonster->name}</h3>
                    </div>
                    <div class='panel-body'>
                      Type: {$enemyMonster->type} <br />
                      Hit Points: {$enemyMonster->healthPoints} <br />
                      Attack: {$enemyMonster->attackPoints} <br />
                      Defense: {$enemyMonster->defensePoints} <br />
                    </div>
                  </div>
                  <hr />
          </div>";
        ?>
      </div>

      <div class="row">
        <?php

        $output = "Select a monster to fight the Enemy Monster!";

          echo "<div class='col-xs-12'>
            <div class='well'>
              {$output}
            </div>
          </div>"

         ?>
      </div>

      <!-- Display all monsters -->
      <div id="monsters" class="row">
        <?php require "./app/get-monsters.php" ?>
      </div>
    <div>
    <!-- Script dependecies -->
    <?php require "./views/scripts.php" ?>
  </body>
</html>
