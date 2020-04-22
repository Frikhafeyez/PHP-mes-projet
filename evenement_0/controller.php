<?php
include "connexion.php";
include "fonction.class.php";
include "inscrit.class.php";

//initialisation des parametres
$tab_ext=array('jpg','png','gif');
$fn=new fonction();
$id="";
$nom="";
$prenom="";
$email="";
$photo="";
$tel="";
$pays="";
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

if(isset($_POST['prenom']))
$prenom=$_POST['prenom'];

if(isset($_POST['email']))
$email=$_POST['email'];

if(isset($_POST['tel']))
$tel=$_POST['tel'];

if(isset($_POST['pays']))
$pays=$_POST['pays'];

if(isset($_FILES['photo']))
{

if(is_uploaded_file($_FILES['photo']['tmp_name']))
{
	if(!empty($photo))
	unlink("photos/".$photo);

	$photo=$_FILES['photo']['name'];
	$tab=explode('.',$photo);
	$ext=strtolower($tab[sizeof($tab)-1]);
	if(!in_array($ext,$tab_ext)){
		echo "erreur d extention!";
		exit();
	}
	
	$nom_photo=$fn->generer_chaine(8);
	
	$photo=$nom_photo.".".$ext;
	
	copy($_FILES['photo']['tmp_name'],'photos/'.$photo);
}
}

//creation de l'objet
$insc=new inscrit($id, $nom, $prenom, $email, $photo, $tel, $pays);

switch($action){
	case "add1":include "inscription.php";
	break;
	
	case "add":$insc->add($cnx);
	break;
	
	case "supp":$insc->supp($cnx);
	break;
	
	case "liste":$inscrits=$insc->liste($cnx);
	include "liste_inscrit.php";
	break;
	
	case "edit1":$inscrit=$insc->detail($cnx);
	include "modifier_inscrit.php";
	break;
	
	case "edit":$insc->edit($cnx);
	break;
}
?>