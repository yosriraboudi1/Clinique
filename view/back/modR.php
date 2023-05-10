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
<?php
    include_once '../../Models/rdv.php';
    include_once '../../Controller/rdvC.php';

    $error = "";

    // create deplacement
    $rdv = null;

    // create an instance of the controller
    $rdvC = new rdvC();
    if (
        isset($_POST["cin"]) &&
        isset($_POST["nom"]) &&        
        isset($_POST["prenom"]) &&
        isset($_POST["email"]) && 
        isset($_POST["tel"]) && // fixed missing comma
        isset($_POST["date"])&&
        isset($_POST["heure"])
    ) {
        if (
            !empty($_POST["cin"]) && 
            !empty($_POST['nom']) &&
            !empty($_POST["prenom"]) && 
            !empty($_POST["email"]) && 
            !empty($_POST["tel"]) && // fixed missing comma
            !empty($_POST["date"])&&
            !empty($_POST["heure"])
        ) {
            $rdv = new rdv(
                $_POST['cin'],
                $_POST['nom'],
                $_POST['prenom'], 
                $_POST['email'],
                $_POST['tel'], // fixed missing comma
                $_POST['date'],
                $_POST['heure']
                
            );
            $rdvC->modifierrdv($rdv, $_POST["cin"]);
            header('Location:affR.php');
        }
        else
            $error = "Missing information";
    }    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
<body>
        
    <div id="error">
        <?php echo $error; ?>
    </div>
            
    <?php
        if (isset($_POST['cin'])){
            $cin = $_POST['cin'];
            $rdv = $rdvC->recupererR($cin);
            
    ?>
        
    <form action="" method="POST">
        <table>
            <tr>
                <td>
                    <label for="cin">cin :
                    </label>
                </td>
                <td><input type="text" name="cin" id="cin" value="<?php echo $rdv['cin']; ?>" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="nom"> nom:
                    </label>
                </td>
                <td><input type="text" name="nom" id="nom" value="<?php echo $rdv['nom']; ?>" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="prenom">prenom:
                    </label>
                </td>
                <td><input type="text" name="prenom" id="prenom" value="<?php echo $rdv['prenom']; ?>" maxlength="20"></td>
            </tr>
            
                <tr>
                    <td>
                        <label for="email">email:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="email" id="email" value="<?php echo $rdv['email']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="tel">tel:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="tel" id="tel" value="<?php echo $rdv['tel']; ?>">
                    </td>
                </tr>              
                <tr>
                <tr>
                <td>
                    <label for="date">date:
                    </label>
                </td>
                <td>
                        <input type="text" name="date" value="<?php echo $rdv['date']; ?>" id="date">
                    </td>
                </tr>
                <tr>
                <td>
                    <label for="heure">heure:
                    </label>
                </td>
                <td>
                        <input type="text" name="heure" value="<?php echo $rdv['heure']; ?>" id="heure">
                    </td>
                </tr>
                   
                       
                    <td>
                        <input type="submit" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
    </body>
</html>