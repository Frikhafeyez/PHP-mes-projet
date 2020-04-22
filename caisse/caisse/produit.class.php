<?php
class produit extends fonction
{
private $id;
private $nom;
private $prixu;
private $tva;
private $photo;

public function __construct($id, $nom, $prixu, $tva, $photo)
{
$this->id = $id;
$this->nom = $nom;
$this->prixu = $prixu;
$this->tva = $tva;
$this->photo = $photo;
}
public function add($cnx){
	$res=$cnx->prepare("insert into produit (nom, prixu, tva, photo) values(?,?,?,?)");
	$res->execute([$this->nom, $this->prixu,$this->tva,$this->photo]);

	$this->redirect("produit.controller.php?action=liste");
}

public function edit($cnx){
	$res=$cnx->prepare("update produit set nom=?,prixu=?,tva=?,photo=? where id=?");
	$res->bindParam(1,$this->nom);
	$res->bindParam(2,$this->prixu);
	$res->bindParam(3,$this->tva);
	$res->bindParam(4,$this->photo);
	$res->bindParam(5,$this->id);
	$res->execute();
	$this->redirect("produit.controller.php?action=liste");
}

public function supp($cnx){
	$cnx->exec("delete from produit where id='".$this->id."'");
	unlink("photos/".$this->photo);
	$this->redirect("produit.controller.php?action=liste");
}

public function liste($cnx){
	$produits=$cnx->query("select * from produit")->fetchAll(PDO::FETCH_OBJ);
	return $produits;
}

public function detail($cnx){
	$produit=$cnx->query("select * from produit where id='".$this->id."'")->fetch(PDO::FETCH_OBJ);
	return $produit;
}

}
?>