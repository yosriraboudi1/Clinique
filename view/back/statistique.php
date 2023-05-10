<?php
require "..\..\connection.php";
require "..\..\Controller\ReservationC.php";

$r = new Reservation(); 
$db=connect_db();
$ListeDesRes = $r->getAll();
if (isset($_POST["dte"])){
$dte=$_POST["dte"];
}
else {
    $dte ="";
}

$req="SELECT * from reservation where date_deb='$dte'";
try{
    $res=$db->query($req);
}catch (PDOException $e){
    die ($e->getMessage());
}


?>  
<html lang="en">
<head>
    <meta name="description">
    <meta name="keywords" >
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OASIS MENTALE</title>
    <link rel="stylesheet" href="style_dash_sec.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500&display=swap" rel="stylesheet">
</head>

<body>
    <header>  
            <nav class="sidebar">
                <ul>
                    <li>
                        <img src="../front/images/logo.png" id="img">
                        </li>
                        <li>
                                <a href="affR.php"><i class="bi bi-file-earmark"></i>&nbsp;Listes des <br> rendez-vous</a>
                            </li>
                            <li>
                                <a href="affC.php"><i class="bi bi-file-earmark"></i></i>&nbsp;Listes des <br> consultations</a>
                            </li>
							<li>
                                <a href="affiche_res.php"><i class="bi bi-person-circle"></i>&nbsp;Liste des <br>reservations </a>
                            </li>
                            <li>
                                <a href="affiche_annonce.php"><i class="bi bi-person-circle"></i>&nbsp;Liste des <br>annonces </a>
                            </li>
                            <li>
                                <a href="ajout_annonces.html"><i class="bi bi-plus-lg"></i>&nbsp;Ajouter <br>une annonce </a>
                            </li>
                            <li>
                                <a href="statistique.php"><i class="bi bi-percent"></i>&nbsp;Statistique</a>
                            </li>
                            

                        </ul>
                    </nav>
                
            </div>
        </div>
    </div>
</header>
<section>
<form method=POST action=statistique.php>
  
<input type="text" id="dte" name="dte" style="border:none ; color : black ">
<input type="submit" value="chercher" style="background-color : #1B96C4; color : white ;border:none; border-radius:5px;">
</form>
</section>
                    <table>
                        <thead>
                            <th>Nombre des reservation totale</th>
                            <th>Nombre des reservation</th>
                            <th>Pourcentage %</th>
                        </thead>
                        <br>
                        <tr>
                            <td><?php echo sizeof($ListeDesRes) ?></td>
                            <td><?php echo $res->rowCount(); ?></td>
                            <td><?php echo ($res->rowCount()/sizeof($ListeDesRes)) *100; ?>%</td>
                        </tr>