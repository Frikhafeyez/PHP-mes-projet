<?php
class ticket extends produit
{
private $id;
private $num;
private $date;
private $qte;
private $produit;
private $tva;
private $prixu;
private $ttc;

public function __construct($id, $num, $date, $qte, $produit, $tva, $prixu, $ttc)
{
$this->id = $id;
$this->num = $num;
$this->date = $date;
$this->qte = $qte;
$this->produit = $produit;
$this->prixu = $prixu;
$this->tva = $tva;
$this->photo = $ttc;
}
public function add($cnx){
	$res=$cnx->prepare("insert into ticket (num, date, qte, produit, prixu, tva, ttc) values(?,?,?,?,?,?,?)");
	$this->date=date("Y-m-d H:i:s");
	$this->ttc=$this->prixu*$this->qte*(1+$this->tva/100);
	$res->execute([$this->num, $this->date,$this->qte,$this->produit,$this->prixu,$this->tva,$this->ttc]);
	//pour recupérer l'id du dernier enregistrement avec PDO
	$this->id=$cnx->lastInsertId();
	
	$this->redirect("ticket.controller.php?action=imprim&id=".$this->id);
}


public function imprim($cnx){
	$ticket=$cnx->query("select * from ticket where id='".$this->id."'")->fetch(PDO::FETCH_OBJ);
	return $ticket;
}

}
?>