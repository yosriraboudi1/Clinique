<?php
require "connection.php";
$db = connect_db();
$id_modif=(int)$_GET["idm"];
$nom_modif = $db->quote($_GET["nom"]);
$pren_modif =$db->quote($_GET["prenom"]);
$num_tel_modif =$db->quote($_GET["ntel"]);
$heure_deb_modif =$db->quote($_GET["hdeb"]);
$heure_fin_modif =$db->quote($_GET["hfin"]);
$req="update annonce 
set nom_inf=$nom_modif ,prenom_inf=$pren_modif ,numtel_inf=$num_tel_modif ,heure_deb=$heure_deb_modif ,heure_fin=$heure_fin_modif 
where id=$id_modif";
try{
    $res=$db->exec($req);
    if ($res){
        ?>
       <script>
            location.replace("sec_dash.php");
        </script>
        <?php
    }

}catch(PDOException $e){
    die($e->getMessage());
}
