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
    include_once '../../Models/consult.php';
    include_once '../../Controller/consultC.php';

    $error = "";

    // create deplacement
    $consult = null;

    // create an instance of the controller
    $consultC = new consultC();
    if (
        isset($_POST["numero_const"]) &&
        isset($_POST["cin_patient"]) &&        
        isset($_POST["nom_docteur"]) &&
        isset($_POST["nom_patient"]) && 
        isset($_POST["pr_patient"]) && 
        isset($_POST["tel"]) && // fixed missing comma
        isset($_POST["motif"])&&
        isset($_POST["traitements"])
    ) {
        if (
            !empty($_POST["numero_const"]) && 
            !empty($_POST['cin_patient']) &&
            !empty($_POST["nom_docteur"]) && 
            !empty($_POST["nom_patient"]) && 
            !empty($_POST["pr_patient"]) && 
            !empty($_POST["tel"]) && // fixed missing comma
            !empty($_POST["motif"])&&
            !empty($_POST["traitements"])
        ) {
            $consult = new consult(
                $_POST['numero_const'],
                $_POST['cin_patient'],
                $_POST['nom_docteur'], 
                $_POST['nom_patient'],
                $_POST['pr_patient'],
                $_POST['tel'], // fixed missing comma
                $_POST['motif'],
                $_POST['traitements']
                
            );
            $consultC->modifierconsult($consult, $_POST["numero_const"]);
            header('Location:affC.php');
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
     
   
        
    <form action="" method="POST">
        <table>
            <tr>
                <td>
                    <label for="numero_const">numero_const:
                    </label>
                </td>
                <td><input type="number" name="numero_const" id="numero_const" value="<?php echo $consult['numero_const']; ?>" ></td>
            </tr>
            <tr>
                <td>
                    <label for="cin_patient">cin_patient:
                    </label>
                </td>
                <td><input type="number" name="cin_patient" id="cin_patient" value="<?php echo $consult['cin_patient']; ?>" maxlength="20"></td>
            </tr>
         
                
                <tr>
                    <td>
                        <label for="tel">tel:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="tel" id="tel" value="<?php echo $consult['tel']; ?>">
                    </td>
                </tr>              
               
                     <tr>  
                    <td>
                        <input type="submit" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
      
        








    </body>
</html>