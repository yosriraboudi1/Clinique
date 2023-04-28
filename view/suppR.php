<?php
	include_once 'C:\xampp\htdocs\rendez-vous/Controller/rdvC.php';
    
	$rdvC=new rdvC();
	$rdvC->supprimerrdv($_GET["cin"]);
	header('Location:affR.php');
?>