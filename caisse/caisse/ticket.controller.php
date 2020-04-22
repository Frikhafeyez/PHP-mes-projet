<?php //session_start();
include "connexion.php";
include "fonction.class.php";
include "produit.class.php";
include "ticket.class.php";

//initialisation des parametres
$id="";
$num="";
$date=""; 
$qte="";
$produit="";
$tva="";
$prixu="";
$ttc="";
$action="caisse";

//recupétation des variables externes
if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];

if(isset($_REQUEST['id']))
$id=$_REQUEST['id'];

if(isset($_POST['num']))
$num=$_POST['num'];

if(isset($_POST['date']))
$date=$_POST['date'];

if(isset($_POST['qte']))
$qte=$_POST['qte'];

if(isset($_POST['produit']))
$produit=$_POST['produit'];

if(isset($_POST['prixu']))
$prixu=$_POST['prixu'];

if(isset($_POST['tva']))
$tva=$_POST['tva'];

if(isset($_POST['ttc']))
$ttc=$_POST['ttc'];


//creation de l'objet
$tk=new ticket($id, $num, $date, $qte, $produit, $tva, $prixu, $ttc);

switch($action){
	case "caisse":$produits=$tk->liste($cnx);
	include "caisse.php";
	break;
	
	case "add":$tk->add($cnx);
	break;
			
	case "imprim":$ticket=$tk->imprim($cnx);
	include "ticket.php";
	break;
	
}
?>