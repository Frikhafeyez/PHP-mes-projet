<?php
session_start();
$login="ala";
$mdp="ala";
if(isset($_POST['username']))
$_SESSION['login']=$_POST['username'];

if(isset($_POST['password']))
$_SESSION['mdp']=$_POST['password'];
if(($_SESSION['login']==$login ) and ($_SESSION['mdp']==$mdp ))
	header("location:controller.php");
else
	header("location:login.html");
?>