<?php
require "connection.php";
$db = connect_db();
$cin_modif=(int)$_GET["cin"];
$tel_modif=(int)$_GET["tel"];
$nom_modif = $db->quote($_GET["nom"]);
$pren_modif =$db->quote($_GET["prenom"]);
$date_deb_modif =$db->quote($_GET["date_deb"]);
$date_fin_modif =$db->quote($_GET["date_fin"]);
$comm_modif =$db->quote($_GET["commentaire"]);
$rty="update reservation 
set cin=$cin_modif ,num_tel=$tel_modif ,nom=$nom_modif ,prenom=$pren_modif ,date_deb=$date_deb_modif ,date_fin=$date_fin_modif ,comm=$comm_modif
where cin=$cin_modif";
try{
    $aze=$db->exec($rty);
    if ($aze){
        ?>
       <script>
            location.replace("affiche_res.php");
        </script>
        <?php
    }

}catch(PDOException $e){
    die($e->getMessage());
}
