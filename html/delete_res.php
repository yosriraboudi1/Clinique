<?php
require "connection.php";
$db =connect_db();
$cin_supp=(int)$_GET["cin"];
$rty="delete from reservation where cin=$cin_supp";
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