<?php

class Battle{
  public function startBattle($player, $enemy){
    global $playerAttack, $enemyAttack;
    $playerAttack = $player->attackPoints;
    $enemyAttack = $enemy->attackPoints;

    $this->checkHealth($player, $enemy);

  }


  private function checkHealth($player, $enemy){

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
    print "-$player->name attacks with $player->attack!\n";

    global $playerAttack;
    $playerAttack -= $enemy->defensePoints;
    print "-$player->name deals $playerAttack damage.\n";
    $enemy->healthPoints -= $playerAttack;
    print "-$enemy->name now has $enemy->healthPoints health.\n";
    $this->enemyCounterAttacks($player, $enemy);
  }

  private function enemyCounterAttacks($player, $enemy){
    print "-$enemy->name counter attacks with $enemy->attack!\n";

    global $enemyAttack;
    $enemyAttack -= $player->defensePoints;
    print "-$enemy->name deals $enemyAttack damage.\n";
    $player->healthPoints -= $enemyAttack;
    print "-$player->name now has $player->healthPoints health.\n";
    $this->startBattle($player, $enemy);
  }

  private function declareWinner($winner){
     print "-$winner->name is the Champion!\n";
  }

}

 ?>
