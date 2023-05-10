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
  isset($_POST["date_de_naissance"]) &&
  isset($_POST["tel"]) &&
  isset($_POST["motif"]) &&
  isset($_POST["traitements"])
) {
  if (
    !empty($_POST["numero_const"]) &&
    !empty($_POST["cin_patient"]) &&
    !empty($_POST["nom_docteur"]) &&
    !empty($_POST["nom_patient"]) &&
    !empty($_POST["pr_patient"]) &&
    !empty($_POST["date_de_naissance"]) &&
    !empty($_POST["tel"]) &&
    !empty($_POST["motif"]) &&
    !empty($_POST["traitements"])
  ) {
    $consult = new consult(
      $_POST['numero_const'],
      $_POST['cin_patient'],
      $_POST['nom_docteur'],
      $_POST['nom_patient'],
      $_POST['pr_patient'],
      $_POST['date_de_naissance'],
      $_POST['tel'],
      $_POST['motif'],
      $_POST['traitements']
    );
    $consultC->ajouterconsult($consult);

    exit();
  } else {
    $error = "Missing information";
  }
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/mm.css">
</head>

<style>
  .container {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f7f7f7;
    border-radius: 5px;
  }

  h2 {
    text-align: center;
    margin-bottom: 20px;
  }

  .form-group {
    margin-bottom: 20px;
  }

  label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }

  input[type="text"],
  input[type="date"],
  input[type="tel"],
  textarea {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: none;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
  }

  textarea {
    height: 100px;
  }
</style>





<body>
  <div class="container">
    <h2>Fiche de consultation</h2>
    <form action="#" method="post">
      <div class="form-group">
        <label for="numero_const" class="col-4 col-form-label">Numéro de consultation :</label>
        <input type="text" id="numero_const" name="numero_const" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="cin_patient">cin du patient :</label>
        <input type="text" id="cin_patient" name="cin_patient" required>
      </div>
      <div class="form-group">
        <label for="nom_docteur">nom du docteur :</label>
        <input type="text" id="nom_docteur" name="nom_docteur" required>
      </div>
      <div class="form-group">
        <label for="nom_patient">nom du patient :</label>
        <input type="text" id="nom_patient" name="nom_patient" required>
      </div>
      <div class="form-group">
        <label for="pr_patient">prénom du patient :</label>
        <input type="text" id="pr_patient" name="pr_patient" required>
      </div>
      <div class="form-group">
        <label for="date_de_naissance">Date de naissance :</label>
        <input type="date" id="date_de_naissance" name="date_de_naissance" required>
      </div>
      <div class="form-group">
        <label for="tel">Téléphone :</label>
        <input type="number" id="tel" name="tel" required>
      </div>

      <div class="form-group">
        <label for="motif">Motif de la consultation :</label>
        <textarea type="text" id="motif" name="motif" required></textarea>
      </div>

      <div class="form-group">
        <label for="traitements">traitements :</label>
        <textarea type="text" id="traitements" name="traitements"></textarea>
      </div>

      <div class="form-group row">
        <center> <button type="submit" id="mybtn" class="btn btn-lg btn-primary">enregistrer</button> </center>
      </div>
    </form>

</body>


</div>
<!--
<script>
        function verif(){
            
            cin = document.getElementById("cin").value ;
           if ((cin.length!= 8) || (isNaN(cin))){
                alert("le numero de cin doit etre numerique et contient obligatoirement 8 chiffre !!");
                return false ;
            }

            var ch2 = document.getElementById("nom").value ;
            for (i = 0; i < ch2.length; i++) {
            if ((ch2.charAt(i).toUpperCase() < 'A') || (ch2.charAt(i).toUpperCase() > 'Z')) {
            alert("Le nom doit etre alphabetique seulement!!");
            return false;
        }
    }   
            var ch1 = document.getElementById("prenom").value ;
                for (i = 0; i < ch1.length; i++) {
                if ((ch1.charAt(i).toUpperCase() < 'A') || (ch1.charAt(i).toUpperCase() > 'Z')) {
                alert("le prenom doit etre alphabetique seulement !!");
            return false;
         }
        }
        
            num = document.getElementById("tel").value ;
           if ((num.length!= 8) || (isNaN(num))){
                alert("le numero de telehpone doit etre numerique et contient obligatoirement 8 chiffre !!");
                return false ;
            }
          

            date = document.getElementById("date").value ;
            if (date.charAt(2)!='/' && date.charAt(5)!='/' ){
                alert("la date doit etre de cette format 00/00/00");
                return false ;
            }
            

            
            heure = document.getElementById("heure").value ;
            if (heure.charAt(2)!=':'){
                alert("l'heure doit etre de cette format 00:00");
                return false ;
            }


        }
    </script>
  -->


</body>

</html>