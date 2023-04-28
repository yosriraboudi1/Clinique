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
    <title>OASIS MENTALE</title>
</head>

<body class="yacinecolor">

    <div class="row justify-content-between">
        
        <div class="col-7">
            <div class="haut fsb pt-5 pb-5 ">
                <img src="images/logo.png" width="180px" height="180px" style="margin :-50px 0px 0px 0px ;">
                
            </div>
            <div class="rounded-3 fsb ">
                <fieldset name="form-field">
                    <form action="..\back\ajout_res.php"  method="POST" style="margin : -150px 0px 0px 550px ;">
                        <label for="cin" style="font-weight : bold ;">Cin :</label><br>
                        
                            <input type="text" name="cin"  id="cin" placeholder="Entrer votre CIN "style="border : 0px ; border-radius: 9px ; width : 320px ; height : 34px ; " pattern="^\d{8}$" title="le numero de cin doit etre numerique et contient obligatoirement 8 chiffre"><br><br>
                        
                        <label for="tel" style="font-weight : bold ;">Telephone :</label><br>
                            <input type="text"name="tel"  id="tel" placeholder="Entrer votre telephone "style="border : 0px ; border-radius: 9px ; width : 320px ; height : 34px ; " pattern="^\d{8}$" title="le numero de telehpone doit etre numerique et contient obligatoirement 8 chiffre"><br><br>
                        
                        <label for="nom" style="font-weight : bold ;">Nom</label><br>
                            <input type="text" name="nom"  id="nom" placeholder="Entrer votre Nom "style="border : 0px ; border-radius: 9px ; width : 320px ; height : 34px ; " pattern="^[a-zA-Z\s]*$" title="le nom doit etre alphabetique seulement"><br><br>
                        
                        <label for="prenom" style="font-weight : bold ;">Prenom</label><br>
                            <input type="text" name="prenom"  id="prenom" placeholder="Entrer votre Prenom "style="border : 0px ; border-radius: 9px ; width : 320px ; height : 34px ; " pattern="^[a-zA-Z\s]*$" title="le prenom doit etre alphabetique seulement"><br><br>
                        
                        <label for="date_deb" style="font-weight : bold ;">Date debut</label><br>
                            <input type="text" name="date_deb" id="date_deb" placeholder="Entrez la date de debut" style="border : 0px ; border-radius: 9px ; width : 320px ; height : 34px ; " pattern="^(0?[1-9]|[1-2][0-9]|3[0-1])/(0?[1-9]|1[0-2])/([0-9]{4})$" title="La date doit être au format jj/mm/aaaa"><br><br>
                        
                        <label for="date_fin" style="font-weight : bold ;">Date fin</label><br>
                            <input type="text" name="date_fin" id="date_fin" placeholder="Entrez la date de fin" style="border : 0px ; border-radius: 9px ; width : 320px ; height : 34px ; " pattern="^(0?[1-9]|[1-2][0-9]|3[0-1])/(0?[1-9]|1[0-2])/([0-9]{4})$" title="La date doit être au format jj/mm/aaaa"><br><br>
                            <input type="hidden" name="id" id="id" value=<?= $_GET['id'] ?>>
                         <label for="commentaire" style="font-weight : bold ;">Commentaire :</label><br>
                            <input type="text" name="commentaire" id="commentaire" placeholder="Ecrivez le cas du malade  " style="border : 0px ; border-radius: 9px ; width : 320px ; height : 34px ; " pattern="^[a-zA-Z\s]*$" title="le commentaire doit etre alphabetique seulement"><br><br>
                            <input type="submit" value="Reserver" style="margin-left :85px; background-color : #1B96C4; width : 140px ; color : white ;height:32px ; border : 0px ; border-radius : 5px ; "></a>
                        
                        
                        <br>
                        
                    </form>
                </fieldset>
            </div>

        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>