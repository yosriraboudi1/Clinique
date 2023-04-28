<?php

require "..\..\connection.php";
require "..\..\Controller\ReservationC.php";


$cin = $_POST["cin"];
$tel = $_POST["tel"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$date_deb = $_POST["date_deb"];
$date_fin = $_POST["date_fin"];
$commentaire = $_POST["commentaire"];
$id_ann=$_POST["id"];
$reserv=Reservation::insert($cin , $tel , $nom , $prenom ,$date_deb , $date_fin , $commentaire , $id_ann);



header('Location: ..\front\page_annonce.php');
?>