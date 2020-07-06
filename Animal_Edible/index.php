<?php
include_once("AbstractClass123/Animal123.php");
include_once("Animal/Chicken123.php");
include_once("Animal/Tiger123.php");

$animal = new Chicken123();
echo $animal->makeSound();
$animal1 = new Tiger123();
echo $animal1->makeSound();
