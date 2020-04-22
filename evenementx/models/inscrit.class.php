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
	$res=$cnx->prepare("insert into inscrit (nom, prenom, email, photo, tel, pays) values(?,?,?,?,?,?)");
	$res->execute([$this->nom, $this->prenom,$this->email,$this->photo,$this->tel, $this->pays]);
	$this->redirect("index.php?controller=inscrit&action=liste");
}

public function edit($cnx){
	$res=$cnx->prepare("update inscrit set nom=?,prenom=?,email=?,photo=?,tel=?,pays=? where id=?");
	$res->bindParam(1,$this->nom);
	$res->bindParam(2,$this->prenom);
	$res->bindParam(3,$this->email);
	$res->bindParam(4,$this->photo);
	$res->bindParam(5,$this->tel);
	$res->bindParam(6,$this->pays);
	$res->bindParam(7,$this->id);
	$res->execute();
	$this->redirect("index.php?controller=inscrit&action=liste");
}

public function supp($cnx){
	$cnx->exec("delete from inscrit where id='".$this->id."'");
	unlink("photos/".$this->photo);
	$this->redirect("index.php?controller=inscrit&action=liste");
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