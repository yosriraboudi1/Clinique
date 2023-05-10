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
  isset($_POST["tel"]) &&
  isset($_POST["date"]) &&
  isset($_POST["heure"])
) {
  if (
    !empty($_POST["cin"]) &&
    !empty($_POST["nom"]) &&
    !empty($_POST["prenom"]) &&
    !empty($_POST["email"]) &&
    !empty($_POST["tel"]) &&
    !empty($_POST["date"]) &&
    !empty($_POST["heure"])
  ) {
    $rdv = new rdv(
      $_POST['cin'],
      $_POST['nom'],
      $_POST['prenom'],
      $_POST['email'],
      $_POST['tel'],
      $_POST['date'],
      $_POST['heure'],
    );
    $rdvC->ajouterrdv($rdv);

    exit();
  } else {
    $error = "Missing information";
  }
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>prendre un rendez-vous </title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/mm.css">
  <title>Dashboard patient</title>
</head>

<body>
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
        <hr>
        <li><a href="affC.php"><i class="bi bi-list icon"></i></a></li>

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
      <div class="rounded-3 fsb ">
        <fieldset name="form-field">

          <form action="addR.php" method="post" onsubmit="return verif()">

            <div class="form-group row">
              <label for="cin" class="col-4 col-form-label">CIN</label>
              <div class="col-8">
                <input type="number" id="cin" name="cin" placeholder="CIN" class="form-control"><br>
              </div>
            </div>

            <div class="form-group row">
              <label for="cin" class="col-4 col-form-label">Nom</label>
              <div class="col-8">
                <input type="text" id="nom" name="nom" placeholder="Nom" class="form-control"><br>
              </div>
            </div>

            <div class="form-group row">
              <label for="prenom" class="col-4 col-form-label">prenom</label>
              <div class="col-8">
                <input type="text" id="prenom" name="prenom" placeholder="Prénom" class="form-control"><br>
              </div>
            </div>

            <div class="form-group row">
              <label for="email" class="col-4 col-form-label">Adresse email</label>
              <div class="col-8">
                <input type="email" id="email" name="email" placeholder="Adresse email" class="form-control"><br>
              </div>
            </div>

            <div class="form-group row">
              <label for="tel" class="col-4 col-form-label">Téléphone</label>
              <div class="col-8">
                <input type="number" id="tel" name="tel" placeholder="Téléphone" class="form-control"><br>
              </div>
            </div>

            <div class="form-group row">
              <label for="date" class="col-4 col-form-label">date </label>
              <div class="col-8">
                <input type="text" id="date" name="date" placeholder="date" class="form-control"><br>
              </div>
            </div>


            <div class="form-group row">
              <label for="heure" class="col-4 col-form-label">heure </label>
              <div class="col-8">
                <input type="text" id="heure" name="heure" placeholder="heure" class="form-control"><br>
              </div>
            </div>

            <div class="form-group row">
              <center> <button type="submit" id="mybtn" class="btn btn-lg btn-primary">prendre
                  un rendez-vous</button> </center>
            </div>



            <div class="form-footer">
              <a href="index.html"></a>
            </div>
          </form>
        </fieldset>
      </div>
    </div>
    <script>
      function verif() {

        cin = document.getElementById("cin").value;
        if ((cin.length != 8) || (isNaN(cin))) {
          alert("le numero de cin doit etre numerique et contient obligatoirement 8 chiffre !!");
          return false;
        }

        var ch2 = document.getElementById("nom").value;
        for (i = 0; i < ch2.length; i++) {
          if ((ch2.charAt(i).toUpperCase() < 'A') || (ch2.charAt(i).toUpperCase() > 'Z')) {
            alert("Le nom doit etre alphabetique seulement!!");
            return false;
          }
        }
        var ch1 = document.getElementById("prenom").value;
        for (i = 0; i < ch1.length; i++) {
          if ((ch1.charAt(i).toUpperCase() < 'A') || (ch1.charAt(i).toUpperCase() > 'Z')) {
            alert("le prenom doit etre alphabetique seulement !!");
            return false;
          }
        }

        num = document.getElementById("tel").value;
        if ((num.length != 8) || (isNaN(num))) {
          alert("le numero de telehpone doit etre numerique et contient obligatoirement 8 chiffre !!");
          return false;
        }


        date = document.getElementById("date").value;
        if (date.charAt(2) != '/' && date.charAt(5) != '/') {
          alert("la date doit etre de cette format 00/00/00");
          return false;
        }



        heure = document.getElementById("heure").value;
        if (heure.charAt(2) != ':') {
          alert("l'heure doit etre de cette format 00:00");
          return false;
        }

      }
    </script>


  </div>
</body>

</html>