<?php
require "connection.php";
$db =connect_db();
$id_supp=(int)$_GET["idm"];
$req="delete from annonce where id=$id_supp";
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