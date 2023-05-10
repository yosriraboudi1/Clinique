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
                    <form action="..\back\ajout_res.php" onsubmit="return verif()" method="POST"  style="margin : -150px 0px 0px 550px ;">
                        <label for="cin" style="font-weight : bold ;">Cin :</label><br>
                        
                            <input type="text" name="cin"  id="cin"  placeholder="Entrer votre CIN "style="border : 0px ; border-radius: 9px ; width : 320px ; height : 34px ; "> <span id="cinalert" color="red"></span><br><br>
                        
                        <label for="tel" style="font-weight : bold ;">Telephone :</label><br>
                            <input type="text"name="tel"  id="tel"  placeholder="Entrer votre telephone "style="border : 0px ; border-radius: 9px ; width : 320px ; height : 34px ; " > <span id="telalert" color="red"></span> <br><br>
                        
                        <label for="nom" style="font-weight : bold ;">Nom</label><br>
                            <input type="text" name="nom"  id="nom" required placeholder="Entrer votre Nom "style="border : 0px ; border-radius: 9px ; width : 320px ; height : 34px ; " ><span id="nomalert" color="red"></span><br><br>
                        
                        <label for="prenom" style="font-weight : bold ;">Prenom</label><br>
                            <input type="text" name="prenom"  id="prenom" required placeholder="Entrer votre Prenom "style="border : 0px ; border-radius: 9px ; width : 320px ; height : 34px ; " ><span id="prenomalert" color="red"></span><br><br>
                        
                        <label for="date_deb" style="font-weight : bold ;">Date debut</label><br>
                            <input type="text" name="date_deb" id="date_deb" placeholder="Entrez la date de debut" style="border : 0px ; border-radius: 9px ; width : 320px ; height : 34px ; " ><span id="datedebalert" color="red"></span><br><br>
                        
                        <label for="date_fin" style="font-weight : bold ;">Date fin</label><br>
                            <input type="text" name="date_fin" id="date_fin" placeholder="Entrez la date de fin" style="border : 0px ; border-radius: 9px ; width : 320px ; height : 34px ; " ><span id="datefinalert" color="red"></span><br><br>
                            <input type="hidden" name="id" id="id" value=<?= $_GET['id'] ?>>
                         <label for="commentaire" style="font-weight : bold ;">Commentaire :</label><br>
                            <input type="text" name="commentaire" id="commentaire" placeholder="Ecrivez le cas du malade  " style="border : 0px ; border-radius: 9px ; width : 320px ; height : 34px ; " ><span id="commalert" color="red"></span><br><br>
                            <input type="submit" value="Reserver" style="margin-left :85px; background-color : #1B96C4; width : 140px ; color : white ;height:32px ; border : 0px ; border-radius : 5px ; "></a>
                        
                        
                        <br>
                        
                    </form>
                </fieldset>
            </div>

        </div>

    </div>
    <script>
        function verif(){
                var ch2 = document.getElementById("cin").value ;
                if (ch2.length!=8 ||isNaN(ch2)){
                document.getElementById("cinalert").innerHTML = "<span style='color:red'> Le CIN doit etre numerique et obligatoirement contient 8 chiffres </span>";
            return false;
                }
        else {
            document.getElementById("cinalert").innerHTML = "<span style='color:green'> Correct</span>";
         }
    
            var num = document.getElementById("tel").value ;
            if (num.length!=8 ||isNaN(num)){
                    document.getElementById("telalert").innerHTML = "<span style='color:red'>Le Num tel doit etre numerique et obligatoirement contient 8 chiffres </span>";
                    return false;
         }
         else {
            document.getElementById("telalert").innerHTML = "<span style='color:green'> Correct</span>";
         }

                    
            var ch2 = document.getElementById("nom").value ;
            for (i = 0; i < ch2.length; i++) {
            if ((ch2.charAt(i).toUpperCase() < 'A') || (ch2.charAt(i).toUpperCase() > 'Z')) {
                document.getElementById("nomalert").innerHTML = "<span style='color:red'> Le nom doit etre alphabetique </span>";
            return false;
        }
        else {
            document.getElementById("nomalert").innerHTML = "<span style='color:green'> Correct</span>";
         }
    }   
            var ch1 = document.getElementById("prenom").value ;
                for (i = 0; i < ch1.length; i++) {
                if ((ch1.charAt(i).toUpperCase() < 'A') || (ch1.charAt(i).toUpperCase() > 'Z')) {
                    document.getElementById("prenomalert").innerHTML = "<span style='color:red'> Le prenom doit etre alphabetique </span>";
                    return false;
         }
         else {
            document.getElementById("prenomalert").innerHTML = "<span style='color:green'> Correct</span>";
         }
                    }

            ddeb = document.getElementById("date_deb").value ;  //     14/12/2002   
            if (ddeb.charAt(2)!= '/'  || ddeb.charAt(5)!='/'){ //      012345789
                document.getElementById("datedebalert").innerHTML = "<span style='color:red'> date de debut doit etre de la format DD/MM/YYYY</span>";
                return false ;
            }
            else {
            document.getElementById("datedebalert").innerHTML = "<span style='color:green'> Correct</span>";
         }
            dfin = document.getElementById("date_fin").value ;
            if (dfin.charAt(2)!= '/'  || dfin.charAt(5)!='/'){
                document.getElementById("datefinalert").innerHTML = "<span style='color:red'> date de fin doit etre de la format DD/MM/YYYY </span>";
                return false ;
            }
            else {
            document.getElementById("datefinalert").innerHTML = "<span style='color:green'> Correct</span>";
         }

        }
        
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>