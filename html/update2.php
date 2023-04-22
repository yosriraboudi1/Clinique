<?php
require "connection.php";
require "..\Models\AnnonceModel.php";

$id_modif=(int)$_GET["id"];
$nom_modif = $_GET["nom"];
$pren_modif =$_GET["prenom"];
$num_tel_modif =$_GET["ntel"];
$heure_deb_modif =$_GET["hdeb"];
$heure_fin_modif =$_GET["hfin"];
$res = Annonce::Update($id_modif,$nom_modif,$pren_modif,$num_tel_modif,$heure_deb_modif,$heure_fin_modif);
if ($res){
    ?>
    <script>
    location.replace("aff_annonce.php");
    </script>
    <?php
}


?>
