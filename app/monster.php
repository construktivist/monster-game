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

}
