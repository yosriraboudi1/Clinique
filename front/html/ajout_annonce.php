<?php
require "connection.php";
$db = connect_db();
if (empty($_POST["nom"]) || empty($_POST["prenom"]) || empty($_POST["ntel"]) || empty($_POST["hdeb"]) || empty($_POST["hfin"])){
    die ("Remplir tout les champs svp !!!");
}
$nom = $db->quote($_POST["nom"]);
$prenom = $db->quote($_POST["prenom"]);
$ntel = $db->quote($_POST["ntel"]);
$hdeb = $db->quote($_POST["hdeb"]);
$hfin = $db->quote($_POST["hfin"]);
$req = "INSERT INTO annonce (nom_inf , prenom_inf ,numtel_inf,heure_deb , heure_fin) values ($nom , $prenom , $ntel , $hdeb , $hfin)";
try {
    $res=$db->exec($req);
    if ($res){
        ?>
        <script>
        location.replace("sec_dash.php");
        </script>
        <?php
    }
    else {
        echo "Erreur !!";
    }
}catch (PDOException $e){
    die ($e->getMessage());
}



?>