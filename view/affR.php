<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/mm.css">
    <title>Dashboard patient</title>
</head>

<body class="yacinecolor">

    <div class="row justify-content-between">
        <div class="col-1 pr1 bg-white">
            <ul>
                <li><a href=""><i class="bi bi-house-door-fill icon ff"></i></a>
                    <hr>
                </li>
                <li><a href=""><i class="bi bi-archive icon"></i></a>
                    <hr>
                </li>
                <li><a href=""><i class="bi bi-person icon"></i></a>
                    <hr>
                </li>
                <li><a href=""><i class="bi bi-gear-fill icon"></i></a></li>
            </ul>
            <ul>
                <li><a href="./index2.html"><i class="bi bi-door-open icon"></i></a></li>
            </ul>
        </div>
        <div class="col-7">
            <div class="haut fsb pt-5 pb-5 ">
                <img src="images/logo.png" width="180px" height="180px" style="margin :-50px 0px 0px -500px ;">
                <div class="fsb pt-4">
                    <i class="bi bi-bell icon2"></i>
                    <div class="dropdown" style="margin :0px 90px 0px 0px;">
                        <button class="btn btn-info pt-3 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Aujourd'hui
                        </button>
                        <ul class="dropdown-menu" >
                            <li><a class="dropdown-item" href="#">lundi</a></li>
                            <li><a class="dropdown-item" href="#">mardi</a></li>
                            <li><a class="dropdown-item" href="#">mercredi</a></li>
                            <li><a class="dropdown-item" href="#">jeudi</a></li>
                            <li><a class="dropdown-item" href="#">vendredi</a></li>
                            <li><a class="dropdown-item" href="#">samedi</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="rounded-3 fsb ">
                <fieldset name="form-field">
                    <form action="#" name="rdv" class="rdv-form" style="margin : -60px 0px 0px 0px ;">
                        <label for="cin" style="font-weight : bold ;">Cin :</label><br>
                            <input type="text" id="cin" placeholder="Entrer votre CIN "style="border : 0px ; border-radius: 9px ; width : 320px ; height : 34px ; "><br><br>
                        
                        <label for="tel" style="font-weight : bold ;">Telephone :</label><br>
                            <input type="number" id="tel" placeholder="Entrer votre telephone "style="border : 0px ; border-radius: 9px ; width : 320px ; height : 34px ; "><br><br>
                        
                        <label for="nom" style="font-weight : bold ;">Nom</label><br>
                            <input type="text" id="nom" placeholder="Entrer votre Nom "style="border : 0px ; border-radius: 9px ; width : 320px ; height : 34px ; "><br><br>
                        
                        <label for="prenom" style="font-weight : bold ;">Prenom</label><br>
                            <input type="text" id="prenom" placeholder="Entrer votre Prenom "style="border : 0px ; border-radius: 9px ; width : 320px ; height : 34px ; "><br><br>
                        
                        <label for="date" style="font-weight : bold ;">Date</label><br>
                            <input type="date" id="date" style="border : 0px ; border-radius: 9px ; width : 320px ; height : 34px ; "><br><br>
                        
                         <label for="add" style="font-weight : bold ;">Adresse :</label><br>
                            <input type="text" id="add" placeholder="Entrer votre adresse " style="border : 0px ; border-radius: 9px ; width : 320px ; height : 34px ; "><br><br>
							<label for="heure" style="font-weight : bold ;">heure:</label><br>
                            <input type="text" id="heure" placeholder="Entrer l'heure " style="border : 0px ; border-radius: 9px ; width : 320px ; height : 34px ; "><br><br>
                        
                        
                        <br>
                        <button class="submit" style="border : 0px ; margin-left : 80px ; color : white ; background-color: #136989; border-radius: 8px ; width:120px ; height : 32px ">Reserver</button>
                    </form>
                </fieldset>
            </div>


			<div> -->
				<?php
					include_once '../Controller/rdvC.php';
					$rdvC=new rdvC();
					$listerdv=$rdvC->afficherrdv(); 
				?>
				
				<html>
					<head></head>
					<body>
						<button><a href="addR.php">Ajouter un rendez-vous</a></button>
						<form method="post">
	<label for="username">Nom d'utilisateur :</label>
	<input type="text" id="username" name="nom" required>
	<button type="submit">Rechercher</button>
</form>
<?php
// Traitement du formulaire de recherche
try {
$conn = new PDO("mysql:host=localhost;dbname=rendezvous", 'root', '');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch(PDOException $e) {
echo "Erreur de connexion à la base de données: " . $e->getMessage();
 }
	if (isset($_POST['nom'])) {
		$nom = $_POST['nom'];
$users = searchUsersByName($conn, $nom);
		if (count($users) > 0) {
			echo '<h2>Résultats de la recherche :</h2>';
			echo '<ul>';
			foreach ($users as $user) {
				echo '<li>' . $user['cin'] . ' ' . $user['nom'] . ' ' . $user['prenom']. ' ' . $user['email']. ' ' . $user['tel']. '</li>';
			}
			echo '</ul>';
		} else {
			echo '<p>Aucun utilisateur trouvé.</p>';
		}
	}

function searchUsersByName($conn, $nom) {
		$stmt = $conn->prepare("SELECT * FROM rdv WHERE nom LIKE :nom or prenom LIKE :nom");
		$stmt->bindValue(':nom', '%'.$nom.'%');
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
 // Fermeture de la connexion à la base de données
	$conn = null;


?>
						<center><h1>Liste des rendez-vous</h1></center>
						<table border="1" align="center">
							<tr>
								<th>cin</th>
								<th>nom</th>
								<th>prenom</th>
								<th>email</th>
								<th>tel</th>
								<th>date</th>
								<th>heure</th>
								<th>Modifier</th>
								<th>Supprimer</th>
							</tr>
							<?php
								foreach($listerdv as $rdv){
							?>
							<tr>
								<td><?php echo $rdv['cin']; ?></td>
								<td><?php echo $rdv['nom']; ?></td>
								<td><?php echo $rdv['prenom']; ?></td>
								<td><?php echo $rdv['email']; ?></td>
								<td><?php echo $rdv['tel']; ?></td>
								<td><?php echo $rdv['date']; ?></td>
								<td><?php echo $rdv['heure']; ?></td>
								<td>
									<form method="POST" action="modR.php">
										<input type="submit" name="Modifier" value="Modifier">
										<input type="hidden" value=<?PHP echo $rdv['cin']; ?> name="cin">
									</form>
								</td>
								<td>
									<a href="suppR.php?cin=<?php echo $rdv['cin']; ?>">Supprimer</a>
								</td>
							</tr>
							<?php
								}
							?>
						</table>
					</body>
				</html>
</div>

        </div>
        <!-- <div class="col-3 bg-info rounded-3 pr3">
            <div class="pt-1">
                <div class="pr3">
                    <img src="images/245701894_1507903596232382_6113419623064047752_n.jpg" width="100px"
                        height="auto" class="pr2" alt="">
                    <p class="text-center">hazem tebibi</p>
                    <p class="text-center">20 ans</p>
                </div>
            </div>
            <img src="images/calender.png" width="100%" class="rounded-3" alt="">
        </div> -->

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>













