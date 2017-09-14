<?php

class Battle{
  public function startBattle($player, $enemy){
    global $playerAttack, $enemyAttack;
    $playerAttack = $player->attackPoints;
    $enemyAttack = $enemy->attackPoints;

    $this->checkHealth($player, $enemy);

  }


  private function checkHealth($player, $enemy){
    echo "checkHealth\n";

    if ($player->healthPoints <= 0 && $enemy->healthPoints > 0){
      $this->declareWinner($enemy);
    }

    else if ($player->healthPoints > 0 && $enemy->healthPoints <= 0){
      $this->declareWinner($player);
    }

    else if ($player->healthPoints <= 0 && $enemy->healthPoints <= 0){
      $this->declareWinner($player);
    }

    else{
      $this->playerAttacks($player, $enemy);
    }

  }

  private function playerAttacks($player, $enemy){
    echo "fight\n";

    global $playerAttack;
    $playerAttack -= $enemy->defensePoints;
    echo "$playerAttack\n";
    $enemy->healthPoints -= $playerAttack;
    echo "$enemy->healthPoints\n";
    $this->enemyCounterAttacks($player, $enemy);
  }

  private function enemyCounterAttacks($player, $enemy){
    echo "counterAttack\n";

    global $enemyAttack;
    $enemyAttack -= $player->defensePoints;
    echo "$enemyAttack\n";
    $player->healthPoints -= $enemyAttack;
    echo "$enemy->healthPoints\n";
    $this->startBattle($player, $enemy);
  }

  private function declareWinner($winner){
    echo "$winner->name is the Champion!";
  }

}

 ?>
