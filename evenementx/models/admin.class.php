<?php
class admin extends fonction
{
private $id;
private $nom;
private $prenom;
private $login;
private $password;

public function __construct($id, $nom, $prenom, $login, $password)
{
$this->id = $id;
$this->nom = $nom;
$this->prenom = $prenom;
$this->login = $login;
$this->password = crypt(md5($password),'fhfghs65465sgfh');

}

public function add($cnx){
	$res=$cnx->prepare("insert into admin (nom, prenom, login, password) values(?,?,?,?)");
	$res->execute([$this->nom, $this->prenom,$this->login,$this->password]);
	$this->redirect("index.php?controller=admin&action=liste");
}

public function edit($cnx){
	$res=$cnx->prepare("update admin set nom=?,prenom=?,login=?,password=? where id=?");
	$res->bindParam(1,$this->nom);
	$res->bindParam(2,$this->prenom);
	$res->bindParam(3,$this->login);
	$res->bindParam(4,$this->password);
	$res->bindParam(5,$this->id);
	$res->execute();
	$this->redirect("index.php?controller=admin&action=liste");
}

public function supp($cnx){
	$cnx->exec("delete from admin where id='".$this->id."'");
	$this->redirect("index.php?controller=admin&action=liste");
}

public function liste($cnx){
	$admins=$cnx->query("select * from admin")->fetchAll(PDO::FETCH_OBJ);
	return $admins;
}

public function detail($cnx){
	$admin=$cnx->query("select * from admin where id='".$this->id."'")->fetch(PDO::FETCH_OBJ);
	return $admin;
}

public function login($cnx){
	$admin=$cnx->query("select * from admin where login='".$this->login."' and password='".$this->password."'")->fetch(PDO::FETCH_OBJ);
	if(is_object($admin)){
		$_SESSION['login']=$this->login;
		$_SESSION['password']=$this->password;
		$this->redirect("index.php");
	}else{
		$this->redirect("login.php?error=1");
	}
}

public function logout(){
session_destroy();
$this->redirect("login.php");
}
}
?>