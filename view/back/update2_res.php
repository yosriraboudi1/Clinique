<?php
require "..\..\connection.php";
require "..\..\Controller\ReservationC.php";

$cin_modif=(int)$_GET["cin"];
$tel_modif=(int)$_GET["tel"];
$nom_modif = $_GET["nom"];
$pren_modif =$_GET["prenom"];
$date_deb_modif =$_GET["date_deb"];
$date_fin_modif =$_GET["date_fin"];
$comm_modif =$_GET["commentaire"];

$res = Reservation::Update($cin_modif,$tel_modif,$nom_modif,$pren_modif,$date_deb_modif,$date_fin_modif,$comm_modif);
if ($res){
    ?>
    <script>
    location.replace("affiche_res.php");
    </script>
    <?php
}

?>