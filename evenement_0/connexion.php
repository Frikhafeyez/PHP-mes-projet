<?php 
$cnx= new PDO('mysql:host=localhost;dbname=test', 'root', ''); 
//ajouter cette instruction pour permettre l’affichage des messages d’erreurs 
$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); 
?>
