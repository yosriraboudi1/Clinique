<?php
require "connection.php";
$db = connect_db();
$id_modif=(int)$_GET["idm"];
$req ="select * from annonce where id=$id_modif";
try {
    $res=$db->query($req);
    $a=$res->fetchObject();
}catch(PDOException $e){
    die($e->getMessage());
}

?>
<html lang="en">

<head>
    <meta name="description">
    <meta name="keywords" >
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShoufliHalDocteur</title>
    <link rel="stylesheet" href="../css/style_dash_sec.css">
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
                        <img src="../images/logo.png" id="img">
                        </li>
                        <br>
                        <br>
                            <br>
                            <li>
                                <a href="sec_dash.php"><i class="bi bi-person-circle"></i>&nbsp;List Annonces </a>
                            </li>
                            <li>
                                <a href="ajout_anoonces.html"><i class="bi bi-plus-lg"></i>&nbsp;Ajout Annonces </a>
                            </li>
                            
                            <li>
                                <a href="#"><i class="bi bi-gear"></i> Settings</a>
                            </li>
                            <li>
                                <a href="../index.html"><i class="bi bi-door-closed"></i> Log out</a>
                            </li>

                        </ul>
                    </nav>
                
            </div>
        </div>
    </div>
</header>
    <section id="add">
                    <i class="bi bi-bell icon2"></i>
                    <select name="pets" >
                        <option value="today">Aujourd'hui</option>
                    </select>
                    <br><br>
                    <div class="form" action="update2.php">
                        <form action="update2.php" method="GET">
                            <label for="idm" style="font-weight : bold ;">Nom : </label><br>
                            <input type="text" name="idm" id="idm" value="<?= $a->id ?>" readonly style="width : 250px ; height:34px ; border: 0px ; border-radius : 8px "><br><br>
                            <label for="nom" style="font-weight : bold ;">Nom : </label><br>
                            <input type="text" name="nom" id="nom" value="<?= $a->nom_inf ?>" style="width : 250px ; height:34px ; border: 0px ; border-radius : 8px "><br><br>
                            <label for="prenom" style="font-weight : bold ;">Prenom : </label><br>
                            <input type="text" name="prenom" id="prenom" value="<?= $a->prenom_inf ?>"  style="width : 250px ; height:34px ; border: 0px ; border-radius : 8px "><br><br>
                            <label for="ntel" style="font-weight : bold ;">Numero de telephone : </label><br>
                            <input type="text" name="ntel" id="ntel" value="<?= $a->numtel_inf ?>" style="width : 250px ; height:34px ; border: 0px ; border-radius : 8px "><br><br>
                            <label for="hdeb" style="font-weight : bold ;">Heure de debut : </label><br>
                            <input type="text" name="hdeb" id="hdeb" value="<?= $a->heure_deb ?>" style="width : 250px ; height:34px ; border: 0px ; border-radius : 8px "><br><br>
                            <label for="hfin" style="font-weight : bold ;">Heure de fin  : </label><br>
                            <input type="text" name="hfin" id="hfin" value="<?= $a->heure_fin ?>"style="width : 250px ; height:34px ; border: 0px ; border-radius : 8px "><br><br><br>
                            <input type="submit" value="Modifier" style="margin-left :50px; background-color : #1B96C4; width : 140px ; color : white ;height:32px ; border : 0px ; border-radius : 5px ; ">
                        </form>
                    </div>

    </section>
