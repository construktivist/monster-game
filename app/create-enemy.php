<?php

require "monster.php";

$enemyType = "machine";
$enemyAttack = "lazer";
$enemyHealthPoints = 20;
$enemyAttackPoints = 15;
$enemyDefensePoints = 5;
$enemyName = "Enemy Monster";

$enemyMonster = new Monster(
  $enemyAttack,
  $enemyAttackPoints,
  $enemyDefensePoints,
  $enemyHealthPoints,
  $enemyName,
  $enemyType
);
