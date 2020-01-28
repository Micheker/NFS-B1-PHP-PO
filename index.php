<?php

require './classes/Voiture.php';

$voiture1 = new Voiture("Lada", "Niva", "blanc", [2000, 1500, 800], 980);

var_dump($voiture1);

$voiture1->couleur = 'rouge';
$voiture1->masse = 1000;
$voiture1->modele = 'R14';
$voiture1->dimensions = [2000, 1500, 800];
$dimensions = $voiture1->dimensions;

$voiture1->afficherMessage();

 ?>
