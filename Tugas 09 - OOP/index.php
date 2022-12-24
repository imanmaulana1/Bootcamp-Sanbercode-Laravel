<?php
require_once('animal.php');
require_once('ape.php');
require_once('frog.php');

$sheep = new Animal("shaun");
$sungokong = new Ape("kera sakti");
$kodok = new Frog("buduk");

echo "Name : " . $sheep->name . "<br>"; // "shaun"
echo "legs : " . $sheep->legs . "<br>"; // 4
echo "cold blooded : " . $sheep->cold_blooded . "<br><br>"; // "no"

echo "Name : " . $kodok->name . "<br>"; // "shaun"
echo "legs : " . $kodok->legs . "<br>"; // 4
echo "cold blooded : " . $kodok->cold_blooded . "<br>"; // "no"
echo $kodok->jump();

echo "Name : " . $sungokong->name . "<br>"; // "shaun"
echo "legs : " . $sungokong->legs . "<br>"; // 4
echo "cold blooded : " . $sungokong->cold_blooded . "<br>"; // "no"
echo $sungokong->yell();
