<?php
require "html\connection.php";
$db = connect_db();
if (empty($_POST["cin"]) || empty($_POST["tel"]) || empty($_POST["nom"]) || empty($_POST["prenom"]) || empty($_POST["date_deb"]) || empty($_POST["date_fin"]) || empty($_POST["commentaire"])){
    die ("Remplir tout les champs svp !!!");
}
$cin = $db->quote($_POST["cin"]);
$tel = $db->quote($_POST["tel"]);
$nom = $db->quote($_POST["nom"]);
$prenom = $db->quote($_POST["prenom"]);
$date_deb = $db->quote($_POST["date_deb"]);
$date_fin = $db->quote($_POST["date_fin"]);
$commentaire = $db->quote($_POST["commentaire"]);
$id_ann=$_POST["id"];
$rty = "INSERT INTO reservation (cin ,num_tel, nom ,prenom, date_deb, date_fin, comm,id_ann) values ($cin , $tel ,$nom, $prenom , $date_deb , $date_fin, $commentaire,$id_ann)";

try {
    $aze=$db->exec($rty);
    if ($aze){
        ?>
        <script>
        location.replace("page_annonce.php");
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