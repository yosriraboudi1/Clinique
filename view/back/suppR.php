<?php
	include_once '../../Controller/rdvC.php';
    
	$rdvC=new rdvC();
	$rdvC->supprimerrdv($_GET["cin"]);
	header('Location:affR.php');
?>