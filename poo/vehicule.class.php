<?php
class vehicule
{
protected $prix; //On souhaite que les classes qui en héritent puissent y accéder
//Cette méthode un peut spéciale est le constructeur, elle est exécutée lorsque vous "créez" votre objet. Elle doit initialiser les attributs de la classe.
public function __construct($prix_vehicule)
{ 
$this->prix = $prix_vehicule; 
}
public function setprix($nouveau_prix)
{ 
$this->prix = $nouveau_prix; 
}
public function getprix()
{ 
return $this->prix; 
}
}
?>
