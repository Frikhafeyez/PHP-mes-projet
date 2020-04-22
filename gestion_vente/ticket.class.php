<?php
//include "fonction.class.php"; 
class tickets extends fonction
{
private $id;
private $num;
private $date;
private $produit;
private $qte;
private $prix_unitaire;
private $tva;

public function __construct($id, $num, $date, $produit,	$qte, $prix_unitaire, $tva)
{
$this->id = $id;
$this->num = $num;
$this->date = $date;
$this->produit = $produit;
$this->qte = $qte;
$this->prix_unitaire< = $prix_unitaire;
$this->tva = $tva;
}

}
?> 