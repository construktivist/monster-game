<?php

require "monster.php";

$attacks = ["Claws", "Jaws", "Tail", "Fangs"];
$types = ["fire", "water", "nature"];

$enemyAttack = $attacks[rand(0,3)];
$enemyAttackPoints = rand(5, 10);
$enemyDefensePoints = rand(5, 15);
$enemyHealthPoints = rand(10, 15);
$enemyName = "Enemy Monster";
$enemyType = $types[rand(0,2)];

$enemyMonster = new Monster($enemyAttack, $enemyAttackPoints, $enemyDefensePoints, $enemyHealthPoints, $enemyName, $enemyType);
