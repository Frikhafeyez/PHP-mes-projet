<?php
class voiture extends vehicule
{
private $climatisation; //Avec private les classes qui en héritent ne puissent pas y accéder
public function __construct($prix_vehicule, $clim)
{
parent::__construct($prix_vehicule); //On appelle le constructeur de la classe Vehicule en lui fournissant le prix
$this->climatisation = $clim;
}
}
?>