<?php
require "connection.php";
require "..\Models\AnnonceModel.php";
$nom =$_POST["nom"];
$prenom = $_POST["prenom"];
$ntel = $_POST["ntel"];
$hdeb = $_POST["hdeb"];
$hfin = $_POST["hfin"];
$annonceee=Annonce::insert($nom , $prenom , $ntel , $hdeb ,$hfin);
if ($annonceee){
    ?>
    <script>
        location.replace("aff_annonce.php");
    </script>
        <?php
}





?>