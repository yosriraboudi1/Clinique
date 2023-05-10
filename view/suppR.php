<?php
	include_once 'C:\xampp\htdocs\siteweb/Controller/rdvC.php';
    
	$rdvC=new rdvC();
	$rdvC->supprimerrdv($_GET["cin"]);
	header('Location:affR.php');
?>