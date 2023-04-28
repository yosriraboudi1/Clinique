<?php
include "../Model/produits.php";
include"../Controller/ProduitsC.php" ;

include_once "../Controller/commandeC.php";

session_start();
$_SESSION['id']=2;
if(isset($_SESSION['id']))
{
  $produit=new produitC;
  $count=$produit->countpanier($_SESSION['id'])

?> 

<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>OASISMENTALE</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- icon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
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
                              
                                     <li class="nav-item">
                                    <a class="nav-link" href="product_list.php">produits </a>
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
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- breadcrumb part start-->


  <!--================Cart Area =================-->
  <section class="cart_area section_padding">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            
            <tbody>
                    <?php
                    $c=intval($row["cnt"]);
                    if($c==0)
                     {
                ?>
                
                <?php
                  }
                                    if($c!=0)
                                             {
                                    $produit=new produitC();
                                                        $p="PC" ;

                                    $listeproduits=$produit->afficherproduits();
                                    foreach($listeproduits as $row){
                                    $id=$row['id'];


                $chemin="images/produit/".$id;
                ?>
                  <br>  <br>  <br>
             <div class="cart-area">
                
                <form method="POST" action="supprimerproduit.php">
                    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">  
                     

                    <button class="close1" name="supprimer" ><img src="img\22.png"/> </button>
                      <br>  <br>
                </form>
                 <div class="cart-sec simpleCart_shelfItem">
                        <div class="cart-item cyc">
                             <img src="<?php echo $chemin; ?>" class="img-responsive" alt=""/>
                        </div>
                       <div class="cart-item-info">
                        <ul class="qty">
                            <li><p><b>Nom produit : </b><?PHP echo $row['nom']; 

                            ?></p></li>
                            <li>
                                                             <form method="POST" action="modifierproduit.php">
                                <div class="flex-w bo5 of-hidden w-size17">

                                 Quantité  :  <input class="size8 m-text18 t-center num-product" type="number" name="quantite" value="<?PHP echo $row['quantite']; ?>">
                                     <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                                </div>
                                <br>   
                               &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <button name="Modifier" class="bg8 t-center eff2"  style="color:rgb(100, 165, 187)">modifier</button><br>
                                 </form>
                            </li>
                        </ul>

                             
                       </div>
                       <div class="clearfix"></div>

                  </div>
             </div>
             <?PHP
                }}?>
                  </div>
                </td>
              </tr>
          
              
            </tbody>
          </table>
          <a class="continue" style="background:rgb(100, 165, 187);
  padding:10px 60px;
  
  font-size:1em;
  color:#fff;
  text-decoration:none;
  display: block;
   font-weight: 600;  
   text-align: center;
   margin-bottom:2em;" href="checkout_final.php">Checkout</a>
            
            
           
            
        
      </div>
  </section>
  <!--================End Cart Area =================-->
    <!--::footer_part start::-->
    
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