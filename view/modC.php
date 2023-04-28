<?php
    include_once '../Model/consult.php';
    include_once '../Controller/consultC.php';

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
    <button><a href="affC.php">Retour à la liste des fiches</a></button>
    <hr>
        
    <div id="error">
        <?php echo $error; ?>
    </div>
     
   
        
    <form action="" method="POST">
        <table border="1" align="center">
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