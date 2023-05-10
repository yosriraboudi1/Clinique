<?php
require_once "connection.php";
$db = connect_db();
$req = "select * from annonce";
try {
    $res = $db->query($req);
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
    <section>
                    <i class="bi bi-bell icon2"></i>
                    <select name="pets" >
                        <option value="today">Aujourd'hui</option>
                    </select>
    </section>
<br><br>
                    <table>
                        <thead>
                            <th>Id</th>
                            <th>Nom infermier</th>
                            <th>Prenom infermier</th>
                            <th>Num infermier</th>
                            <th>Heure de debut </th>
                            <th>Heure de Fin </th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <?php
                        while ($annonce = $res->fetchObject()){
                           
                            echo "<tr>" ;
                            echo "<td> $annonce->id </td> ";
                            echo "<td> $annonce->nom_inf </td> ";
                            echo "<td> $annonce->prenom_inf </td> ";
                            echo "<td> $annonce->numtel_inf </td> ";
                            echo "<td> $annonce->heure_deb </td> ";
                            echo "<td> $annonce->heure_fin</td> ";
                            ?>
                            <td><a href="#"><i class="bi bi-pen"></i></a></td>;
                            <td><a href="#"><i class="bi bi-trash-fill"></i></a></td>;
                            <?php
                            echo "</tr>";
                            echo "<br>" ;
                            
                        } 
                        ?>

                      </table>
    
    


    </body>
    
</html>