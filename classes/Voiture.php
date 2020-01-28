<?php

class Voiture
{
  public $marque;
  public $modele;
  public $couleur;
  public $dimensions = [0, 0, 0];
  public $masse;
  public $vitesse = 0;

  public function __construct($mar, $mod, $cou, $dim, $mas)
  {
    $this->marque = $mar;
    $this->modele = $mod;
    $this->couleur = $cou;
    $this->dimensions = $dim;
    $this->masse = $mas;
  }

  public function afficherMessage()
  {
    echo "Je suis Michel";
  }
}















 ?>
