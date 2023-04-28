<?php

include_once '../Controller/consultC.php';
$consultC=new consultC();
$listeconsult=$consultC->afficherconsult(); 
?>

<html>
<head></head>
<body>
	<button><a href="addC.php">afficher ma fiche de consultation</a></button>
	<h1>Recherche d'utilisateur</h1>
	
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
				echo '<li>' . $user['nom_docteur'] . ' ' . $user['nom_patient'] . ' ' . $user['pr_patient']. ' ' . $user['tel']. ' ' . $user['motif']. '</li>';
			}
			echo '</ul>';
		} else {
			echo '<p>Aucun utilisateur trouvé.</p>';
		}
	}

function searchUsersByName($conn, $nom) {
		$stmt = $conn->prepare("SELECT * FROM consult WHERE nom_docteur LIKE :nom or nom_patient LIKE :nom");
		$stmt->bindValue(':nom', '%'.$nom.'%');
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
 // Fermeture de la connexion à la base de données
	$conn = null;


?>
	<center><h1>fiche de consultation</h1></center>
	<table border="1" align="center">
		<tr>
			<th>numero_const</th>
			<th>cin_patient</th>
			<th>nom_docteur</th>
			<th>nom_patient</th>
			<th>pr_patient</th>
			<th>tel</th>
			<th>motif</th>
			<th>traitements</th>
			<th>Modifier</th>
			<th>Supprimer</th>
		</tr>
		<?php
			foreach($listeconsult as $consult){
		?>
		<tr>
			<td><?php echo $consult['numero_const']; ?></td>
			<td><?php echo $consult['cin_patient']; ?></td>
			<td><?php echo $consult['nom_docteur']; ?></td>
			<td><?php echo $consult['nom_patient']; ?></td>
			<td><?php echo $consult['pr_patient']; ?></td>
			<td><?php echo $consult['tel']; ?></td>
			<td><?php echo $consult['motif']; ?></td>
			<td><?php echo $consult['traitements']; ?></td>
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
</body>

</html>
				
			
