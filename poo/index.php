<?php
include "vehicule.class.php";
include "voiture.class.php";

$voiture = new voiture(17000, TRUE); //On crée une voiture valant 17000 dt et ayant la climatisation
echo $voiture-> getprix();
$voiture-> setprix(15000); //On peut modifier le prix de la voiture
echo $voiture-> getprix();
?>