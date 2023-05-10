<!--

// Informations de connexion à la base de données
$servername = "localhost";
$username = "nom_utilisateur";
$password = "mot_de_passe";
$dbname = "phpmyadmin";

// Connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérification de la connexion
if (!$conn) {
    die("Connexion échouée: " . mysqli_connect_error());
}

// Requête SQL pour récupérer les données
$sql = "SELECT * FROM rdv";
$result = mysqli_query($conn, $sql);

// Vérification des données récupérées
if (mysqli_num_rows($result) > 0) {
    // Affichage des données dans la template
    while($row = mysqli_fetch_assoc($result)) {
    
        echo "cin: " . $row["cin"] . "Nom: " . $row["nom"] . "prenom: " . $row["prenom"] . "Email: " . $row["email"] . "tel: " . $row["tel"] . 
        "date: " . $row["date"] .  "heure: " . $row["heure"] ."<br>";
    }
} else {
    echo "Aucune donnée trouvée dans la base de données.";
}

// Fermeture de la connexion à la base de données
mysqli_close($conn);
?>
-->
<?php 
function connect_db(){
    try{
    $db = new PDO ("mysql:host=localhost;dbname=phpmyadmin" , "root" , "");
    return $db ;
    } catch (PDOException $e) {
        die ($e->getMessage());
    }

}
?>