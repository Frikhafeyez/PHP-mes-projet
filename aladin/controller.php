<?php session_start();
if(isset($_SESSION['login']) and isset($_SESSION['mdp']))
{
include "connexion.php";
include "fonction.class.php";
include "produit.class.php";

//initialisation des parametres


$tab_ext=array('jpg','png','gif');
$fn=new fonction();
$id="";
$nom="";
$des="";
$Photo="";


$action="add1";

//recupétation des variables externes
if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];


if(isset($_REQUEST['id']))
$id=$_REQUEST['id'];

if(isset($_REQUEST['photo_old']))
$photo=$_REQUEST['photo_old'];


if(isset($_POST['nom']))
$nom=$_POST['nom'];

if(isset($_POST['des']))
$des=$_POST['des'];






if(isset($_FILES['Photo']))
{

if(is_uploaded_file($_FILES['Photo']['tmp_name']))
{
	if(!empty($Photo))
	unlink("photos/".$Photo);

	$Photo=$_FILES['Photo']['name'];
	$tab=explode('.',$Photo);
	$ext=strtolower($tab[sizeof($tab)-1]);
	if(!in_array($ext,$tab_ext)){
		echo "erreur d extention!";
		exit();
	}
	
	$nom_photo=$fn->generer_chaine(8);
	
	$Photo=$nom_photo.".".$ext;
	
	copy($_FILES['Photo']['tmp_name'],'photos/'.$Photo);
}
}

//creation de l'objet
$prod=new inscrit($id, $nom, $des, $Photo);

switch($action){
	case "add1":include "produit.php";
	break;
	
	case "add":$prod->add($cnx);
	break;
	
	case "supp":$prod->supp($cnx);
	break;
	
	case "liste":$produits=$prod->liste($cnx);
	include "liste_produit.php";
	break;
	
	case "edit1":$produit=$prod->detail($cnx);
	include "modifier_produit.php";
	break;
	
	case "edit":$prod->edit($cnx);
	break;
}
}
else
	header("location:login.html");

?>