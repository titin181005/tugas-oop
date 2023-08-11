<?php
require 'animal.php';
require 'frog.php';
require 'ape.php';

$sheep = new animal();
$sheep -> setname("shaun");

echo "Name :".$sheep-> getname()."<br>";
echo "legs :".$sheep -> legs()."<br>";
echo "cold blooded:".$sheep -> cold_blooded()."<br><br>";

$kodok = new frog();
$kodok -> setName("buduk");

echo "Name:".$kodok-> getname()."<br>";
echo "legs :".$kodok -> legs()."<br>";
echo "cold blooded:".$kodok -> cold_blooded()."<br>";
echo "jump :".$kodok -> jump()."<br><br>";

$sungokong = new ape();
$sungokong -> setname("Kerak Sakti");

echo "Name :".$sungokong-> getname()."<br>";
echo "legs :".$sungokong -> leg()."<br>";
echo "cold blooded:".$sungokong-> cold_blooded()."<br>";
echo "yell : ".$sungokong -> yell();