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
        isset($_POST["tel"])&&
        isset($_POST["motif"])&&
		isset($_POST["traitements"])
    ) {
        if (
			!empty($_POST["numero_const"]) &&
            !empty($_POST["cin_patient"]) &&
            !empty($_POST["nom_docteur"]) &&
            !empty($_POST["nom_patient"]) &&
            !empty($_POST["pr_patient"]) &&
            !empty($_POST["tel"])&&
            !empty($_POST["motif"])&&
			!empty($_POST["traitements"])
        ) {
			$consult = new consult(
                $_POST['numero_const'],
                $_POST['cin_patient'],
                $_POST['nom_docteur'],
                $_POST['nom_patient'],
                $_POST['pr_patient'],
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
	<title>consultation </title>
	<link rel="stylesheet" type="text/css" href="aa.css">

</head>
<body>
<div class="container">
		<h2>fiche de consultation</h2>
		<form action="addC.php" method="post" onsubmit="return verif()">
			<label for="numero_const">numero de consultation</label>
			<input type="number" id="numero_const" name="numero_const" placeholder="numero_const">

			<label for="cin_patient">cin du patient</label>
			<input type="text" id="cin_patient" name="cin_patient" placeholder="cin_patient">

			<label for="nom_docteur">nom du docteur</label>
		
			<input type="text" id="nom_docteur" name="nom_docteur" placeholder="nom_docteur">

			
			<label for="nom_patient">nom du patient</label>
			<input type="text" id="nom_patient" name="nom_patient" placeholder="nom_patient">

			
			<label for="pr_patient">prénom du patient</label>
			<input type="text" id="pr_patient" name="pr_patient" placeholder="pr_patient">

			<label for="tel">Téléphone</label>
			<input type="number" id="tel" name="tel" placeholder="Téléphone">

            <label for="motif">motif</label>
			<input type="text" id="motif" name="motif" placeholder="motif">

			
			<label for="traitements">traitements</label>
			<input type="traitements" id="traitements" name="traitements" placeholder="traitements">


			<button  type="submit"  id="mybtn">enregistrer la fiche</button>
            
            <input type="reset" value="reset">
			
            <div class="form-footer">
                <a href="index.html"></a>
            </div>
    </form>
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
