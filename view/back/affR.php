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
                        <option value="today">Aujourd'huiii</option>
                    </select>
    </section>
<br><br>
				<?php
					include_once '../../Controller/rdvC.php';
					$rdvC=new rdvC();
					$listerdv=$rdvC->afficherrdv(); 
				?>
				
				<html>
				
			
					</style>
					<head></head>
					<body>

						
						<form method="post">
	<label for="username">Nom d'utilisateur :</label>
	<input type="text" id="username" name="nom" required>
	<button type="submit">Rechercher</button>
</form>
<?php
// Traitement du formulaire de recherche
try {
$conn = new PDO("mysql:host=localhost;dbname=clinique", 'root', '');
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

						<table>
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

									<form method="POST" action="modR.php" >
										<input type="submit" name="Modifier" value="Modifier" >
										<input type="hidden" value=<?PHP echo $rdv['cin']; ?> name="cin">
									</form>
								</td>
								<td>
									<a href="suppR.php?cin=<?php echo $rdv['cin']; ?>"><i class="bi bi-trash-fill"></i></a>
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
  

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>













