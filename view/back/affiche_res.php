<?php
require "..\..\connection.php";
require "..\..\Controller\ReservationC.php";

$reservations = new Reservation(); 
$ListeDesReservations = $reservations->getAll();
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.js"></script>
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
                    <i class="bi bi-bell icon2"></i>
                    <select name="pets" >
                        <option value="today">Aujourd'hui</option>
                        
                    </select><br><br>
                    <button id="download-button" onclick="convertToPDF()" class="btn btn-info" >Download as PDF</button>
    </section>
</br></br>
                    <table id="yosri">
                        <thead>
                            <th>CIN</th>
                            <th>Num telephone</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Date debut </th>
                            <th>Date Fin </th>
                            <th>Commentaire</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <?php
                        foreach ($ListeDesReservations as $reservation){
                           
                            echo "<tr>" ;
                            echo "<td> $reservation->cin </td> ";
                            echo "<td> $reservation->num_tel </td> ";
                            echo "<td> $reservation->nom </td> ";
                            echo "<td> $reservation->prenom </td> ";
                            echo "<td> $reservation->date_deb </td> ";
                            echo "<td> $reservation->date_fin</td> ";
                            echo "<td> $reservation->comm</td> ";
                            ?>
                            <td><a href="update_res.php?cin=<?=$reservation->cin ?>"><i class="bi bi-pen"></i></a></td>;
                            <td><a href="delete_res.php?cin=<?=$reservation->cin ?>"><i class="bi bi-trash-fill"></i></a></td>;
                            <?php
                            echo "</tr>";
                            echo "<br>" ;
                            
                        } 
                        ?>

                      </table>
                      
    </body>
    
    
    <script>
                      function convertToPDF() {
    var doc = new jsPDF();
  doc.setFontSize(14);
  var currentDate = new Date();
  var formattedDate = currentDate.getDate() + "-" + (currentDate.getMonth() + 1) + "-" + currentDate.getFullYear();
  doc.text("Liste des annonce :                                                                "+ formattedDate, 20, 20);

  doc.autoTable({
    html: '#yosri',
    startY: 40, 
    styles: {
      cellPadding: 1,
      fontSize: 12,
    }
  });
  doc.save("annonce.pdf");
  }
                    </script>
    
</html>