<?php //session_start();
include "connexion.php";
include "fonction.class.php";
include "inscrit.class.php";

//initialisation des parametres
$tab_ext=array('jpg','png','gif');
$fn=new fonction();
$id="";
$num="";
$date="";
$produit="";
$qte="";
$prix_unitaire="";
$tva="";
$action="add1";

//recupétation des variables externes
if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];
}

//creation de l'objet
$tic=new tickets($id, $num, $date, $produit, $qte, $prix_unitaire, $tva );


switch($action){
	case "add1":include "produit.php";
	break;
	
	case "add":$tic->add($cnx);
	break;
	
	case "supp":$tic->supp($cnx);
	break;
	
	case "liste":$inscrits=$tic->liste($cnx);
	include "liste_produit.php";
	break;
	
	case "edit1":$inscrit=$tic->detail($cnx);
	include "modifier_produit.php";
	break;
	
	case "edit":$tic->edit($cnx);
	break;
}
?>