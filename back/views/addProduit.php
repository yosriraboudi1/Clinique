<?php
include '../Controller/categorie_c.php';
include_once '../Controller/produitC.php';
include_once '../Modell/produit.php';
include_once '../Model/categorie.php';

$categorieC = new categorieC();

$listec = $categorieC->afficherCategorie();
$error = "";

$produit = null;

$produitC = new produitC();
if (
    isset($_POST["libelle"])
) {
    if (
        !empty($_POST["libelle"])
    ) {
        $produit = new produit(
            $_POST['libelle'],
            $_POST['nb_calories'],
            $_POST['prix'],
            $_POST['description'],
            $_POST['categorie'],
            $_POST['img']
        );
        $produitC->ajoutProduit($produit);
        header('Location:afficherproduit.php');
    } else
        $error = "Missing information";
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Breeze Admin</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/khstore.png" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="assets/images/khstore.png" alt="logo"/></a>
        </div>
        <tr></tr>
        <ul class="nav">
          <li class="nav-item nav-profile">
          
          </li>
        </li>
        <br>
        <br>
        <br>


          <li class="nav-item">
            <a class="nav-link" href="acceuil.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Acceuil</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="gestion_des_clients.php">
              <i class="mdi mdi-account-multiple
 menu-icon"></i>
              <span class="menu-title">Gestion des clients</span>
            </a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="affichercategorie.php">
              <i class="mdi mdi-shopping
 menu-icon"></i>
 <span class="menu-title">Gestion de categorie</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="afficherproduit.php">
              <i class="mdi mdi-tag-outline
 menu-icon"></i>
              <span class="menu-title">Gestion des produits</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="afficherproduit.php">
              <i class="mdi mdi-tag-outline
 menu-icon"></i>
              <span class="menu-title">Gestion des commandes</span>
            </a>
          </li>
       
         
          
         
        </ul>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>
        </div>
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
            <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
              <i class="mdi mdi-menu"></i>
            </button>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell-outline"></i>
                  <span class="count count-varient1">7</span>
                </a>
                <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face4.jpg" alt="" class="profile-pic" />
                    </div>
                    <div class="preview-item-content">
                      <p class="mb-0"> Dany Miles <span class="text-small text-muted">commented on your photo</span>
                      </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face3.jpg" alt="" class="profile-pic" />
                    </div>
                    <div class="preview-item-content">
                      <p class="mb-0"> James <span class="text-small text-muted">posted a photo on your wall</span>
                      </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face2.jpg" alt="" class="profile-pic" />
                    </div>
                    <div class="preview-item-content">
                      <p class="mb-0"> Alex <span class="text-small text-muted">just mentioned you in his post</span>
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0">View all activities</p>
                </div>
              </li>
              <li class="nav-item dropdown d-none d-sm-flex">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-email-outline"></i>
                  <span class="count count-varient2">5</span>
                </a>
                <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <a class="dropdown-item preview-item">
                    <div class="preview-item-content flex-grow">
                      <span class="badge badge-pill badge-success">Request</span>
                      <p class="text-small text-muted ellipsis mb-0"> Suport needed for user123 </p>
                    </div>
                    <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-item-content flex-grow">
                      <span class="badge badge-pill badge-warning">Invoices</span>
                      <p class="text-small text-muted ellipsis mb-0"> Invoice for order is mailed </p>
                    </div>
                    <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-item-content flex-grow">
                      <span class="badge badge-pill badge-danger">Projects</span>
                      <p class="text-small text-muted ellipsis mb-0"> New project will start tomorrow </p>
                    </div>
                    <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                  </a>
                  <h6 class="p-3 mb-0">See all activity</h6>
                </div>
              </li>
              <li class="nav-item nav-search border-0 ml-1 ml-md-3 ml-lg-5 d-none d-md-flex">
                <form class="nav-link form-inline mt-2 mt-md-0">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" />
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                  </div>
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right ml-lg-auto">
              <li class="nav-item dropdown d-none d-xl-flex border-0">
                <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-earth"></i> English </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                  <a class="dropdown-item" href="#"> French </a>
                  <a class="dropdown-item" href="#"> Spain </a>
                  <a class="dropdown-item" href="#"> Latin </a>
                  <a class="dropdown-item" href="#"> Japanese </a>
                </div>
              </li>
              <li class="nav-item nav-profile dropdown border-0">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                  <span class="profile-name">KH Store</span>
                </a>
                <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        <div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
              <h3 class="mb-0"> Gestion des produits <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block"></span>
              </h3>
          
            </div>
            <div class="content-wrapper">
           
            <div class="row">
          
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped">
                     
                        <thead>
                          <tr>
                            <th>Nom de Produit</th>
                            <th>Prix de Produit</th>
                            <th>Quantité</th>
                            <th>Catégorie</th>
                            <th>Description</th>
                          </tr>
                        </thead>
                        <tbody> 
                     
                        <form action="" method="POST" name="ajouterProduitForm" onsubmit="return ajouterProduit()">
                                <div>
                                    <label for="libelle" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Nom de produit:
                                    </label>
                                    <input type="text" name="libelle" id="libelle" maxlength="20">
                                </div>
                                <div>
                                    <label for="nb_calories" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Nombre de colie:
                                    </label>
                                    <input type="text" name="nb_calories" id="nb_calories">
                                </div>
                                <div>
                                    <label for="prix" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Prix:
                                    </label>
                                    <input type="text" name="prix" id="prix">
                                </div>
                                <div>
                                    <label for="description" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Description:
                                    </label>
                                    <input type="text" name="description" id="description">
                                </div>
                               
                                
                                <div class="input-group mb-3">
                                
                                
                                    
                                    <label for="categorie" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Categorie:
                                    </label>
                                    
                                    
                                    <div class="input-group mb-3">
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" name="categorie" id="category">
                                    <option selected>Select one</option>
                                    <?php
                                        foreach ($listec as $categorie) {
                                        ?>                                           
                                    <option value="1"><?php echo $categorie['nomCategorie']; ?> <?php } ?></option>
                                        
                                    </select>
                                    
                                    </div>
                              
                                </div>
                                
                                <div>
                                    <label for="img">image:
                                    </label>
                                    <input type="file" name="img" id="img">
                                </div>
                                <input type="submit" class="btn" value="Envoyer">
                                <input type="reset" class="btn" value="Annuler">
                            </form>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 grid-margin stretch-card">
               
              </div>
              <div class="col-lg-12 grid-margin stretch-card">
            
              </div>
              <div class="col-lg-12 stretch-card">
           
              </div>
            </div>
          </div>
          
       
          </div>
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
     <!-- Plugin js for this page -->
    <!-- container-scroller -->
    <!-- plugins:js -->
   
    <!-- endinject -->
    <!-- Custom js for this page -->
    
    <!-- End custom js for this page -->
    <script>
        $(function() {
            $('#expire_date').datepicker();
        });
    </script>
    	<script src="addProduct.js"></script>
  </body>
</html>