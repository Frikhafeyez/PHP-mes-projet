<?php
class inscrit extends fonction
{
private $id;
private $nom;
private $prenom;
private $email;
private $photo;
private $tel;
private $pays;

public function __construct($id, $nom, $prenom, $email, $photo, $tel, $pays)
{
$this->id = $id;
$this->nom = $nom;
$this->prenom = $prenom;
$this->email = $email;
$this->photo = $photo;
$this->tel = $tel;
$this->pays = $pays;
}

public function add($cnx){
	$cnx->exec("insert into inscrit (nom, prenom, email, photo, tel, pays) 
	values('".$this->nom."', '".$this->prenom."', '".$this->email."',
	 '".$this->photo."', '".$this->tel."', '".$this->pays."')");
	$this->redirect("controller.php?action=liste");
}
S
public function edit($cnx){
	$cnx->exec("update inscrit set nom='".$this->nom."',
	prenom='".$this->prenom."',email='".$this->email."',
	photo='".$this->photo."',tel='".$this->tel."',pays='".$this->pays."'
	 where id='".$this->id."'");
	$this->redirect("controller.php?action=liste");

}

public function supp($cnx){
	$cnx->exec("delete from inscrit where id='".$this->id."'");
	unlink("photos/".$this->photo);
	$this->redirect("controller.php?action=liste");
}

public function liste($cnx){
	$inscrits=$cnx->query("select * from inscrit")->fetchAll(PDO::FETCH_OBJ);
	return $inscrits;
}

public function detail($cnx){
	$inscrit=$cnx->query("select * from inscrit where id='".$this->id."'")->fetch(PDO::FETCH_OBJ);
	return $inscrit;
}

}
?>