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
        isset($_POST["date"])&&
        isset($_POST["heure"])
    ) {
        if (
            !empty($_POST["cin"]) &&
            !empty($_POST["nom"]) &&
            !empty($_POST["prenom"]) &&
            !empty($_POST["email"]) &&
            !empty($_POST["tel"]) &&
            !empty($_POST["date"])&&
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
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #F2F2F2;
		}
		.container {
			margin: 0 auto;
			padding: 50px;
			background-color: #FFFFFF;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			max-width: 600px;
		}
		input[type="text"], input[type="password"], input[type="email"], input[type="number"] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
			border: none;
			border-radius: 4px;
			background-color: #F2F2F2;
		}
		button {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			width: 100%;
		}
		button:hover {
			background-color: #45a049;
		}
		.form-footer {
			margin-top: 10px;
			font-size: 14px;
			text-align: center;
		}
		.form-footer a {
			color: #4CAF50;
			text-decoration: none;
		}
		.error-message {
			color: red;
			font-size: 12px;
			margin-top: 5px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>prendre un rendez-vous</h2>
		<form action="addR.php" method="post" onsubmit="return verif()">
			<label for="cin">CIN</label>
			<input type="number" id="cin" name="cin" placeholder="CIN">

			<label for="nom">Nom</label>
			<input type="text" id="nom" name="nom" placeholder="Nom">

			<label for="prenom">Prénom</label>
			<input type="text" id="prenom" name="prenom" placeholder="Prénom">

			
			<label for="email">Adresse email</label>
			<input type="email" id="email" name="email" placeholder="Adresse email">

			<label for="tel">Téléphone</label>
			<input type="number" id="tel" name="tel" placeholder="Téléphone">

            <label for="date">date</label>
			<input type="text" id="date" name="date" placeholder="date">



            <label for="heure">heure</label>
			<input type="text" id="heure" name="heure" placeholder="heure">


			<button  type="submit"  id="mybtn">prendre un rendez-vous</button>
            
            <input type="reset" value="reset">
			
            <div class="form-footer">
                <a href="index.html"></a>
            </div>
    </form>
</div>
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


    
</body>
</html>
