<?php
include_once '../../Controller/consultC.php';    
	$consultC=new consultC();
	$consultC->supprimerconsult($_GET["numero_const"]);
	header('Location:affC.php');
?>