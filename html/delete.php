<?php
require "connection.php";
require "..\Models\AnnonceModel.php";

$id_supp=(int)$_GET["id"];
$res = Annonce::Delete($id_supp);
if ($res){
    ?>
    <script>
    location.replace("aff_annonce.php");
    </script>
    <?php
}

?>