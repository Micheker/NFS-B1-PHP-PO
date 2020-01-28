<?php
require_once './functions/classautoloader.php';
spl_autoload_register('classautoloader');

require_once './classes/Vehicule.php';
require_once './classes/Voiture.php';
require_once './classes/Coupe.php';

require_once './classes/Animal.php';
require_once './classes/Mammifere.php';
require_once './classes/Vertebre.php';

$toto = new Coupe("Peugeot", "504", "vert", [1800, 1200, 700], 900);
var_dump($toto);

$voiture1 = new Voiture("Lada", "Niva", "blanc", [2000, 1500, 800], 980);
$voiture2 = new Voiture("Nissan", "Cube", "violet", [2500, 1800, 1200], 1000);

echo $voiture1->getMarque();

$voiture1->vitesse = 25;
$voiture2->vitesse = 30;



// echo $voiture1->calculerEnergieCinetique(). "<br />";
// $voiture1->vitesse = 25;
// echo $voiture1->calculerEnergieCinetique()

// $voiture1->couleur = 'rouge';
// $voiture1->masse = 1000;
// $voiture1->modele = 'R14';
// $voiture1->dimensions = [2000, 1500, 800];
// $dimensions = $voiture1->dimensions;
 ?>
