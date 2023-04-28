<?php
include "../Model/produits.php";
include "../Controller/ProduitsC.php" ;
include_once "../config.php" ;

session_start();
$_SESSION['id']=2;
if(isset($_SESSION['id']))
{ 
if(isset($_POST['ajouterproduit1']) && (isset ($_POST['q1'])))
{ 
  $q1=$_POST['q1'];
  $id_display=$_GET["ida"];
  $produit1C=new produitC();
  $produit1=$produit1C->recupererproduit_ajout($id_display);
  $info=$produit1->fetch();
  $produit1=new produit($info["id"],$info["nomproduit"],$info["prix"],$info["qt"],$info["categorie"]);
  $quantitedisponible=$produit1->get_quantite();
  $verif=0;

   if($q1<=0)
  {
    echo "<script>alert(\"La quantité doit etre superieur à 0\")</script>";
    $verif=1;
  }

  if($q1>$quantitedisponible)
  {
    echo "<script>alert(\"La quantité demandée n'est pas disponible dans le stock\")</script>";
    $verif=1;
  }

 
  
  if($verif==0)
  {
    $result=$produit1C->verifierexitenceprod($_SESSION['id'],$produit1->get_id());
    $info=$result->fetch();
    $existence=$info["cnt"];
    if($existence==0)
    {
      $produit1->set_quantite($q1);
      $produit1C->ajouteraupanier($produit1,$_SESSION['id']);
    }
    else
    {
      echo "<script>alert(\"Le produit existe déja dans le panier\")</script>"; 
    }
    
  }
  
}


if(isset($_POST['ajouterwishlist2']))
{ 
  $id_display=$_GET["wishlist"];
  $produit1C=new produitC();
  $produit1=$produit1C->recupererproduit_ajout($id_display);
  $info=$produit1->fetch();
  $produit1=new produit($info["id"],$info["nom"],$info["prix"],$info["quantite"],$info["categorie"]);
  $verif=0;
  if($verif==0)
  {
    $result=$produit1C->verifierexitenceprod1($_SESSION['id'],$produit1->get_id());
    $info=$result->fetch();
    $existence=$info["cnt"];
    if($existence==0)
    {
      
      $produit1C->ajouterwishlist($produit1,$_SESSION['id']);
    }
    else
    {
      echo "<script>alert(\"Le produit existe déja dans le panier\")</script>"; 
    }
    
  }
}

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Oasismentale</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index2.php"> <img src="img/logo2.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index2.php">Acceuil</a>
                                </li>
                                
                              
                              
                               
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex align-items-center">
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                                <a class="rmLink rmRootLink item" href="cart.php"></a>
</li>
<a href="cart.php">
<span class="rmText"><h5> (<span id="simpleCart_quantity" class="simpleCart_quantity">
                        <?php
                          $produit=new produitC;
                          $count=$produit->countpanier($_SESSION['id']);
                          foreach($count as $row)
                            {
                              echo $row["cnt"];
                            }
                          ?>
                    </span> items)<i class="flaticon-shopping-cart-black-shape"></i></h5></span>
</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
       
    </header>
    <!-- Header part end-->

    <!-- breadcrumb part start-->
   
    <!-- breadcrumb part end-->
    
    <!-- product list part start-->
    <section class="product_list section_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="product_sidebar">
                        <div class="single_sedebar">
                            
                        </div>
                        <div class="single_sedebar">
                           
                        
                <div class="col-md-8">
                    <div class="product_list">
                        <?PHP
                    $produit1C=new produitC();
                    $p="medicament" ;
                    $listeproduits=$produit1C->recupererproduitc($p);

                    foreach($listeproduits as $row)
                    {
                        
                                    $id=$row['id'];
                $chemin="images/produit/".$id;
                ?>
               
                  <div class="product-view" >
                  <div class="close-btn"></div>
                  <div class="product-big-image">
                    <img class="img-responsive" alt="a" src="<?php echo $chemin; ?>" />
                       
                  </div>
                  <div class="product-big-desc">      
                    <h2><?PHP echo $row['nomproduit']; ?></h2>
                    <h5>Code du produit : <?PHP echo $row['id']; ?></h5>
                    <!--<h5>Description :<?PHP echo $row['description']; ?></h5>--> 
                    
                    

        <div class="price">
<h4 class="newprice">.<?PHP echo $row['prix']; ?> TND</h4>
        </div>
        <form method="POST" action="?ida=<?PHP echo $row['id']; ?>">
        <h5  style="color:skyblue;">Quantité :<input placeholder="Qt." required type="number" name="q1" /></h5><br><br>
          <button style="background-color:skyblue;"name="ajouterproduit1"class="buybutton">Ajouter au panier</button>
        </form>

            </div>
        </div>        
    
 <?PHP
}
?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!-- product list part end-->
    
    <!-- client review part here -->
    <br><br><br>
    <section id="login">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-6" >
                    <span class="text-center about"><button style="border : 0px ; background-color: white  ; color : #136989" onclick="hid_function_y()">Connectez-vous</button> ou <button style="border : 0px ; background-color: white  ; color : #136989"onclick="hid_function_x()"> créez un compte</button></span>
                    <img src="images/Public health-bro.png" class="imglogin">
                </div>
                <div class="col-6" id="x">
                    <span class="text-begin about2">Bienvenue</span><br><br>
                    <span>entrez vos information s'il vous avez un compte</span><br><br><br><br>
                    <form>
                        <label for="email" class="my-1">Email</label><br>
                        <input type="email" id="email"><br><br>
                        <label for="pwd" class="my-1">Mot de passe</label><br>
                        <input type="password" id="pwd"><br><br>
                        <a href="#">Vous avez oublié votre mot de passe ?</a><br><br>
                        
                        <input type="submit" class="register" value="Connexion">
                        <div class="row">
                            <div class="col-5"><hr></div>
                            <div class="col-1 ou">Où</div>
                            <div class="col-5 scndline"><hr></div>
                        </div><br>
                        
                        <button class="ggl">
                            <div class="row">
                                <div class="col-3">
                                    <img src="images/icons8-logo-google-48.png">
                                </div>    
                                <div class="col-5 mx-4 my-2">
                                    S'inscrire avec google
                                </div>
                            </div>
                        </button>   
                    </form>
                </div>

                <div class="col-6" id="y" style="display: none;">
                    <span class="text-begin about2">Bienvenue</span><br><br>
                    <span>entrez vos information s'il vous avez un compte</span><br>
                    <form>
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <label for="email" class="my-1">Email</label><br>
                                    <input type="email" id="email" >
                                </div>
                                <div class="col-6">
                                    <label for="pwd" class="my-1">Mot de passe</label><br>
                                    <input type="password" id="pwd"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="name" class="my-1">Nom</label><br>
                                    <input type="text" id="name">
                                </div>
                                <div class="col-6">
                                    <label for="cpwd" class="my-1">Verification mot de passe</label><br>
                                    <input type="password" id="cpwd"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="prenom" class="my-1">Prenom</label><br>
                                    <input type="text" id="prenom">
                                </div>
                                <div class="col-6">
                                    <label for="dte" class="my-1 ">Date de naissance</label><br>
                                    <input type="date" id="dte"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="cin" class="my-1">CIN</label><br>
                                    <input type="text" id="cin">
                                </div>
                                <div class="col-6">
                                    <label for="gv" class="my-1">Gouverorat</label><br>
                                    <input type="text" id="gv"><br><br>
                                </div>
                            </div>
                        </div>
                        <a href="#">Vous avez oublié votre mot de passe ?</a><br><br>
                        <input type="submit" class="register" value="Connexion" onclick="add()" >
                        <div class="row">
                            <div class="col-5"><hr></div>
                            <div class="col-1 ou">Où</div>
                            <div class="col-5 scndline"><hr></div>
                        </div><br>
                        
                        <button class="ggl">
                            <div class="row">
                                <div class="col-3">
                                    <img src="images/icons8-logo-google-48.png">
                                </div>    
                                <div class="col-5 mx-4 my-2">
                                    S'inscrire avec google
                                </div>
                            </div>
                        </button>
                    </form>
                </div>


            </div>
        </div>
    </section>
    <!-- subscribe part end -->

    <!--::footer_part start::-->
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
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/mixitup.min.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>
<?php

}

?>