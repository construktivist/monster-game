<?php

class Monster{

  public $name;

  public $type;

  public $attack;

  public $healthPoints;

  public $attackPoints;

  public $defensePoints;

  public function __construct ($attack, $attackPoints, $defensePoints, $healthPoints, $name, $type){
    $this->name = $name;
    $this->type = $type;
    $this->attack = $attack;
    $this->healthPoints = $healthPoints;
    $this->attackPoints = $attackPoints;
    $this->defensePoints = $defensePoints;
  }

  public function attackMonster($enemyDam) {
    return $this->name . " uses " . $this->attack;

    if ($enemyDam > $this->defensePoints){
      $this->healthPoints - $enemyDam;
      return $this->name . " took " . $enemyDam . " points of damage!";

    } else if ($enemyDam === $this->defensePoints) {
      $this->healthPoints - 2;
      return $this->name . " took 2 points of damage!";

    } else {
      return $this->name . " took 0 points of damage!";
    }

  }

  public function healMonster() {
      $heal = rand(2, 5);
      $this->healthPoints + $heal;
      return $this->name . " has healed " . $heal . " points";

  }

}
