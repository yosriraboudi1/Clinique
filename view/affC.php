<?php

include_once '../Controller/consultC.php';
$consultC = new consultC();
$listeconsult = $consultC->afficherconsult();
?>

<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/mm.css">
	<title>prendre un rendez-vous </title>

</head>

<body>
	<div class="row justify-content-between">
		<div class="col-1 pr1 bg-white">
			<ul>
				<li><a href="addR.php"><i class="bi bi-house-door-fill icon ff"></i></a>
					<hr>
				</li>
				<li><a href=""><i class="bi bi-archive icon"></i></a>
					<hr>
				</li>
				<li><a href=""><i class="bi bi-person icon"></i></a>
					<hr>
				</li>

				<li><a href=""><i class="bi bi-gear-fill icon"></i></a>
					<hr>
				</li>
				<li><a href="affC.php"><i class="bi bi-list icon"></i></a>
					<hr>
				</li>
				


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
						<ul class="dropdown-menu">
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

			
			<?php
			// Traitement du formulaire de recherche
			try {
				$conn = new PDO("mysql:host=localhost;dbname=rendezvous", 'root', '');
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (PDOException $e) {
				echo "Erreur de connexion à la base de données: " . $e->getMessage();
			}
			if (isset($_POST['nom'])) {
				$nom = $_POST['nom'];
				$users = searchUsersByName($conn, $nom);
				if (count($users) > 0) {
					echo '<h2>Résultats de la recherche :</h2>';
					echo '<ul>';
					foreach ($users as $user) {
						echo '<li>' . $user['nom_docteur'] . ' ' . $user['nom_patient'] . ' ' . $user['pr_patient'] . ' ' . $user['tel'] . ' ' . $user['motif'] . '</li>';
					}
					echo '</ul>';
				} else {
					echo '<p>Aucun utilisateur trouvé.</p>';
				}
			}

			function searchUsersByName($conn, $nom)
			{
				$stmt = $conn->prepare("SELECT * FROM consult WHERE nom_docteur LIKE :nom or nom_patient LIKE :nom");
				$stmt->bindValue(':nom', '%' . $nom . '%');
				$stmt->execute();
				return $stmt->fetchAll(PDO::FETCH_ASSOC);
			}
			// Fermeture de la connexion à la base de données
			$conn = null;


			?>
			<center>
				<h1>Fiches de consultation</h1>
			</center>
			<table class="table table-striped">
				<tr>
					<th>numero_const</th>
					<th>cin_patient</th>
					<th>nom_docteur</th>
					<th>nom_patient</th>
					<th>pr_patient</th>
					<th>date_de_naissance</th>
					<th>tel</th>
					<th>motif</th>
					<th>traitements</th>
					<th>Modifier</th>
					<th>Supprimer</th>
				</tr>
				<?php
				foreach ($listeconsult as $consult) {
					?>
					<tr>
						<td>
							<?php echo $consult['numero_const']; ?>
						</td>
						<td>
							<?php echo $consult['cin_patient']; ?>
						</td>
						<td>
							<?php echo $consult['nom_docteur']; ?>
						</td>
						<td>
							<?php echo $consult['nom_patient']; ?>
						</td>
						<td>
							<?php echo $consult['pr_patient']; ?>
						</td>
						<td>
							<?php echo $consult['date_de_naissance']; ?>
						</td>
						<td>
							<?php echo $consult['tel']; ?>
						</td>
						<td>
							<?php echo $consult['motif']; ?>
						</td>
						<td>
							<?php echo $consult['traitements']; ?>
						</td>
						<td>
							<form method="POST" action="modC.php">
								<input type="submit" name="Modifier" value="Modifier">
								<input type="hidden" value=<?PHP echo $consult['numero_const']; ?> name="cin">
							</form>
						</td>
						<td>
							<a href="suppC.php?numero_const=<?php echo $consult['numero_const']; ?>">Supprimer</a>
						</td>
					</tr>
					<?php
				}
				?>
			</table>
		</div>
	</div>
</body>

</html>