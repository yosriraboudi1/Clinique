<?php
require "html/connection.php";
$db = connect_db();
$req = "select * from annonce" ;
try{
    $res=$db->query($req);
}catch (PDOExeception $e){
    die($e->getMessage());
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>OASIS MENTALE</title>
</head>
<header>
    <div class="container">
        <div class="row ">
            <div class="col">
                <img src="./images/logo.png" class="logo" alt="Logo">
            </div>
            <div class="col">
                <div class="text-end">
                    <span class="text-secondary mx-4">Contactez nous</span>
                    <a href="#" ><img src="images/WhatsApp_icon.png"></a>
                    <a href="#" ><img src="images/facebook-icon.png"></a>
                    <a href="#" ><img src="images/instagram-icon.png"></a>
                    <a href="#" ><img src="images/youtube-icon.png"></a>
                </div> 
            </div>
        </div>
    </div>
</header>
<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span>menu</span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index2.html"><i class="bi bi-house-door-fill"></i>&nbsp;&nbsp;Acceuil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-book-fill"></i>&nbsp;&nbsp;Consultation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="page3.html"><i class="bi bi-file-text-fill"></i>&nbsp;&nbsp;Rendez-vous</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-chat-fill"></i>&nbsp;&nbsp;Forum</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-megaphone-fill"></i>&nbsp;&nbsp;Annonces</a>
      </li>
          <li class="nav-item">
                <a class="nav-link" href="#footer"><i class="bi bi-info-circle-fill"></i>&nbsp;&nbsp;A propos</a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="#x"><i class="bi bi-pen-fill"></i>login</a>
      </li>
        </ul>
      </div>
    </div>
  </nav>
  <section>
    <div class="container">
        <div class="row">
            <div class="col-8 about">
                Protégez votre santé avec<br><span class="fontchange fst-italic"> <strong>OasisMentale</strong> </span><p class="clrchange fontchange">Votre médecin est à portée de clic.</p>
            </div>
            <div class="col-4">
                <img class="pic2" src="images/Doctor-pana.png">
                <img class="pic" src="images/Doctor-cuate.png">
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col my-5">
                <div class="btn-group">
                    <button class="rc">Nom docteur</button>
                    <button class="cat">Specialité</button>
                    <button class="clique">Clique</button>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br><br><br><br><br><br><br>
  <section id="annonce">
  <div class="container">
      <div class="row">
 <?php while ($annonce = $res->fetch()){
    $nom = $annonce["nom_inf"];
    $prenom = $annonce["prenom_inf"];
    $numtel = $annonce["numtel_inf"];
    $hdeb = $annonce["heure_deb"];
    $hfin = $annonce["heure_fin"];


  ?>
        
            
            
                
                    
                 <?php
                
                
                ?>
                <div class="card col-4">
                    <img class="card-img-top" src="images/card_img.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">
                        <?php echo $nom." ".$prenom ;
                        ?> 
                      </h5>
                      <p class="card-text">
                        <?php
                        echo "Je suis disponible du :".$hdeb . "jusqu'a :".$hfin."<br>";
                        echo "Pour m'appeler Voice mon numero :".$numtel ;
                        ?>
                    </p>
                      <button href="#" class="btn" style="background-color :#136989; color : white ;">Reserver maintenant </button>
                    </div>
                  </div>
                  <?php
                    }
                    ?> 

                </div>
                </div>
                </div>
                    


     
  </section> 
 <br><br>
  <footer id="contact" class="bg-dark">
        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <h3 style="font-weight: bold; color : #1B96C4;">About us</h3><br>
                    <p style="color : white ;">Our fitness platform offers a variety of services to help new users achieve their health and fitness goals</p><br>
                    <i class="bi bi-facebook"></i>&nbsp;&nbsp;
                    <i class="bi bi-instagram"></i>&nbsp;&nbsp;
                    <i class="bi bi-twitter"></i>&nbsp;&nbsp;
                    <i class="bi bi-linkedin"></i>&nbsp;&nbsp;
                </div>  
                <div class="col-5" >
                    <h3 style="font-weight: bold; color : #1B96C4;">Contact Info</h3><br>
                    <p><span class="text-secondary">Address:</span><br>
                       <span style="color : white">ESPRIT el Ghazela, Ariana</span> </p>
                     <p>
                        <span class="text-secondary">Phone number:</span><br>
                        <span style="color : white">+216 53583931</span>
                     </p>   
                     <p>
                        <span class="text-secondary"> Email:</span><br>
                        <span style="color : white">exemple@suffixe.com</span>
                     </p> 
                </div> 
                <div class="col-3">
                    <h3 class="" style="font-weight: bold; color : #1B96C4;">Quick link</h3><br>
                    <span  style="color : white ;"><a href="#abt">Home</a><br><br>
                    <a href="#login" style="color : white ;">Register</a><br><br>
                    <a href="#contact" style="color : white ;">Contact</a><br><br>
                    <a href="#" style="color : white ;">About us</a><br><br></span>
                </div>   
            </div>
            <br><br>
            <div class="row">
                <div  class="col">
                   <p class="text-secondary text-center"> © Copyright ©2023 All rights reserved , made by Yosri Raboudi & Sarra Laabidi & Aziz Jemli & Louay Ellouz & Ranim Maaref 
                </p>
                </div>
            </div>
        </div>
    </footer>



        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>