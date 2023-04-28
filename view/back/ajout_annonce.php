 <?php
require "..\..\connection.php";
require "..\..\Controller\AnnonceC.php";
$nom =$_POST["nom"];
$prenom = $_POST["prenom"];
$ntel = $_POST["ntel"];
$hdeb = $_POST["hdeb"];
$hfin = $_POST["hfin"];
$annonceee=Annonce::insert($nom , $prenom , $ntel , $hdeb ,$hfin);
if ($annonceee){
    ?>
    <script>
        location.replace("affiche_annonce.php");
    </script>
        <?php
} 





?>