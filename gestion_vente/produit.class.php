<?php
class produit extends fonction
{ 
private $id;
private $nom;
private $prix;
private $tva;
private $photo;

public function __construct($id, $nom, $prix, $tva, $photo)
{
$this->id = $id;
$this->nom = $nom;
$this->prix = $prix;
$this->tva = $tva;
$this->photo = $photo; 
}

public function add($cnx){
    $cnx->exec("insert into produits (id, nom, prix, tva, photo) values('".$this->id."',
     '".$this->nom."', '".$this->prix."', '".$this->tva."', '".$this->photo."')");
	$this->redirect("controller.produits.php?action=liste");
}

public function edit($cnx){
	$cnx->exec("update produits set nom='".$this->nom."',prix='".$this->prix."',tva='".$this->tva."',photo='".$this->photo."' where id='".$this->id."'");
	$this->redirect("controller.produits.php?action=liste");

}

public function supp($cnx){
	$cnx->exec("delete from produits where id='".$this->id."'");
	unlink("photos/".$this->photo);
	$this->redirect("controller.produits.php?action=liste");
}

public function liste($cnx){
	$inscrits=$cnx->query("select * from produits")->fetchAll(PDO::FETCH_OBJ);
	return $inscrits;
}

public function detail($cnx){
	$inscrit=$cnx->query("select * from produits where id='".$this->id."'")->fetch(PDO::FETCH_OBJ);
	return $inscrit;
}

}
?>