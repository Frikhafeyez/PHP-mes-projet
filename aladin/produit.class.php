<?php
class inscrit extends fonction
{
private $id;
private $nom;
private $des;
private $Photo;


public function __construct($id, $nom, $Desc, $Photo)
{
$this->id = $id;
$this->nom = $nom;
$this->des = $Desc;
$this->Photo = $Photo;

}

public function add($cnx){
	$cnx->exec("insert into produits (nom, description, photo) values('".$this->nom."', '".$this->des."', '".$this->Photo."')");
	$this->redirect("controller.php?action=liste");
}

public function edit($cnx){
	$cnx->exec("update produits set nom='".$this->nom."',description='".$this->des."',photo='".$this->Photo."' where id='".$this->id."'");
	
	$this->redirect("controller.php?action=liste");

}

public function supp($cnx){
	$cnx->exec("delete from produits where id='".$this->id."'");
	unlink("photos/".$this->photo);
	$this->redirect("controller.php?action=liste");
}

public function liste($cnx){
	//->fetchAll(PDO::FETCH_OBJ)
	$inscrits=$cnx->query("select * from produits");
	return $inscrits;
}

public function detail($cnx){
	$inscrit=$cnx->query("select * from produits where id='".$this->id."'");
	return $inscrit;
}

}
?>