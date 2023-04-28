<?php
require "..\..\connection.php";
require "..\..\Controller\ReservationC.php";
//require "../../Models/reservation.php";

$cin_supp=(int)$_GET["cin"];
$aze= Reservation::DeleteCIN($cin_supp);



if ($aze){
    ?>
    <script>
    location.replace("affiche_res.php");
    </script>
    <?php
}
?>