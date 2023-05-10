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
        echo("ajout");
        $rdvC->ajouterrdv($rdv);

        exit();
    } else {
        $error = "Missing information";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/mm.css">
    <title>Dashboard patient</title>
</head>

<body class="yacinecolor">

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
                    <form action="page3.php" method="post" onsubmit="return verif()">

                        <label for="cin" style="font-weight : bold ;">Cin :</label><br>
                        <input type="number" id="cin" placeholder="Entrer votre CIN "
                            style="border : 0px ; border-radius: 9px ; width : 320px ; height : 34px ; "><br><br>


                        <label for="nom" style="font-weight : bold ;">Nom</label><br>
                        <input type="text" id="nom" placeholder="Entrer votre Nom "
                            style="border : 0px ; border-radius: 9px ; width : 320px ; height : 34px ; "><br><br>

                        <label for="prenom" style="font-weight : bold ;">Prenom</label><br>
                        <input type="text" id="prenom" placeholder="Entrer votre Prenom "
                            style="border : 0px ; border-radius: 9px ; width : 320px ; height : 34px ; "><br><br>

                        <label for="tel" style="font-weight : bold ;">Telephone :</label><br>
                        <input type="number" id="tel" placeholder="Entrer votre telephone "
                            style="border : 0px ; border-radius: 9px ; width : 320px ; height : 34px ; "><br><br>

                        <label for="add" style="font-weight : bold ;">Adresse :</label><br>
                        <input type="text" id="add" placeholder="Entrer votre adresse "
                            style="border : 0px ; border-radius: 9px ; width : 320px ; height : 34px ; "><br><br>
                            <label for="date">date</label>
			<input type="text" id="date" name="date" placeholder="date">



            <label for="heure">heure</label>
			<input type="text" id="heure" name="heure" placeholder="heure">



                        <br>
                        <button class="submit" id="mybtn"
                            style="border : 0px ; margin-left : 80px ; color : white ; background-color: #136989; border-radius: 8px ; width:120px ; height : 32px ">Reserver</button>
                    </form>
                </fieldset>
            </div>

        </div>

        <script>
            function verif() {
                var cin = document.getElementById("cin").value;
                var tel = document.getElementById("tel").value;

                if (cin.length !== 8 || isNaN(cin)) {
                    alert("Le numéro de CIN doit être numérique et contenir exactement 8 chiffres");
                    return false;
                }

                if (tel.length !== 8 || isNaN(tel)) {
                    alert("Le numéro de téléphone doit être numérique et contenir exactement 10 chiffres");
                    return false;
                }

                return true;



                var ch2 = document.getElementById("nom").value;
                for (i = 0; i < ch2.length; i++) {
                    if ((ch2.charAt(i).toUpperCase() < 'A') || (ch2.charAt(i).toUpperCase() > 'Z')) {
                        alert("Le nom doit etre alphabetique seulement!!");
                        //return false;
                    }
                }
                var ch1 = document.getElementById("prenom").value;
                for (i = 0; i < ch1.length; i++) {
                    if ((ch1.charAt(i).toUpperCase() < 'A') || (ch1.charAt(i).toUpperCase() > 'Z')) {
                        return false;
                        alert("le prenom doit etre alphabetique seulement !!");
                    }
                }


                date = document.getElementById("date").value;

                if (date.charAt(2) != '/' && date.charAt(5) != '/') {
                    alert("la date doit etre de cette format 00/00/00");
                    return false;
                }
                // Récupération de la date sélectionnée

                // Récupération de la date d'aujourd'hui
                const today = new Date();

                // Vérification que la date sélectionnée n'est pas dans le passé
               // if (date < today) {
                 //   alert("La date de rendez-vous ne peut pas être dans le passé");
                  //  return;
                //}



                heure = document.getElementById("heure").value;
                if (heure.charAt(2) != ':') {
                    alert("l'heure doit etre de cette format 00:00");
                    return false;
                }


            }
        </script>


        <!-- <div class="col-3 bg-info rounded-3 pr3">
            <div class="pt-1">
                <div class="pr3">
                    <img src="images/245701894_1507903596232382_6113419623064047752_n.jpg" width="100px"
                        height="auto" class="pr2" alt="">
                    <p class="text-center">hazem tebibi</p>
                    <p class="text-center">20 ans</p>
                </div>
            </div>
            <img src="images/calender.png" width="100%" class="rounded-3" alt="">
        </div> -->

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>