<?php
require "..\..\connection.php";
require "..\..\Controller\AnnonceC.php";

$id_supp=(int)$_GET["id"];
$res = Annonce::Delete($id_supp);
if ($res){
    ?>
    <script>
    location.replace("affiche_annonce.php");
    </script>
    <?php
}

?>