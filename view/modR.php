<?php
    include_once '../Model/rdv.php';
    include_once '../Controller/rdvC.php';

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
    <button><a href="affR.php">Retour à la liste des rendez-vous</a></button>
    <hr>
        
    <div id="error">
        <?php echo $error; ?>
    </div>
            
    <?php
        if (isset($_POST['cin'])){
            $cin = $_POST['cin'];
            $rdv = $rdvC->recupererR($cin);
            
    ?>
        
    <form action="" method="POST">
        <table border="1" align="center">
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