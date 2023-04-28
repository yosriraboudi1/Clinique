<?php
   
include "../Model/produits.php";
include "../Controller/ProduitsC.php" ;

  include_once "../Controller/commandeC.php";
  include_once "../Model/commande.php";



/**   require ('pdf/fpdf.php');**/ 
session_start();
$_SESSION['id']=2;
if(isset($_SESSION['id']))
{
  

  $produitC=new produitC();
  $produit1=$produitC->recupererpanier($_SESSION['id']);
  
  $tab=array();
  $somme=0;

  foreach ($produit1 as $row) 
  {
    array_push($tab,$row['prix']*$row['quantite']);
    $somme+=$row['prix']*$row['quantite'];
  }
}
  
  if(isset($_POST['validercommande']) && !empty($_POST['secteur']) )
  {
    $secteur=$_POST['secteur'];
    $dateactuelle = date("Y-m-d");

    $commande1C=new commandeC();
    $commande1= new commande($dateactuelle,$somme,'en cours',$secteur,5,$_SESSION['id']);
    $commande1C->ajoutercommande($commande1);
    $lastID=$commande1C->recupererdernierID();
    $max=$lastID->fetch();
    $max_row=$max["max"];
    

 
   


    $produit1=$produitC->recupererpanier($_SESSION['id']);
    
    /*foreach($produit1 as $row)
    {
      $produit2=new produit($row["id"],$row["nom"],$row["prix"],$row["quantite"],"Test");
      $produitC->ajoutercontenupanier($produit2,$max_row,$_SESSION['id']);
    }
     header('Location: testpdf.php');;
*/
  } 
?>
<!DOCTYPE html>
<!-- saved from url=(0042)http://www.meubleskarray.com/fr/promotions -->
<html xmlns="http://www.w3.org/1999/xhtml" style="" class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths"><head>

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





<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <link href="checkout_final.html" rel="shortcut icon" type="image/x-icon">

    <script src="files/cb=gapi.loaded_0" async=""></script><script src="files/sdk.js.téléchargement" async="" crossorigin="anonymous"></script>
     

     <link href="css2/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css2/style.css" rel='stylesheet' type='text/css' />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css2/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js0/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js0/menu_jquery.js"></script>
<script src="js0/simpleCart.min.js"> </script>




<meta name="" content="&quot;promotion meubles , promotion meubles tunis , promotion meubles karray , promotion karray furniture , promotions karray furniture , promotion meuble tunisie , promotion meuble soukra , promotion meubles l" aouina,="" promotion="" meubles="" ,="" tunis="" promotions="" karray="" meuble="" tunisie="" soukra="" l'aouina="" "="" tunisie;="" tunis;="" salon="" ;="" et="" decoration'="">
<link rel="stylesheet" href="files/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css2/css/recherche.css">
<link rel="Stylesheet" href="files/layout_fr.css" type="text/css">
<link rel="Stylesheet" href="files/font-awesome.css" type="text/css">
<link rel="Stylesheet" href="files/interne.css" type="text/css">
<link rel="Stylesheet" href="files/top_page.css" type="text/css">
<link rel="Stylesheet" href="files/promo.css" type="text/css">
<link rel="Stylesheet" href="files/footer.css" type="text/css">
<link rel="Stylesheet" href="files/header.css" type="text/css">
<link rel="Stylesheet" href="files/menu_rs.css" type="text/css">
<link rel="Stylesheet" href="files/popup_site.css" type="text/css">
<link rel="Stylesheet" href="files/paginator.css" type="text/css">
<link rel="Stylesheet" href="files/WG_list_promo.css" type="text/css">
<link rel="Stylesheet" href="files/menu_prod1.css" type="text/css">
<link rel="Stylesheet" href="files/menu_prod2.css" type="text/css">
<link rel="Stylesheet" href="files/menu_prod3.css" type="text/css">
<link rel="Stylesheet" href="files/menu_prod4.css" type="text/css">
<link rel="Stylesheet" href="files/menu_prod5.css" type="text/css">
<link rel="Stylesheet" href="files/top_menu.css" type="text/css">
<link rel="Stylesheet" href="files/main_menu1.css" type="text/css">
<link rel="Stylesheet" href="files/main_menu2.css" type="text/css">
<link rel="Stylesheet" href="files/menu_rsp.css" type="text/css">
<link rel="stylesheet" type="text/css" href="css2/css2/styleP.css">
<link rel="Stylesheet" href="files/searchbox.css" type="text/css">
<link rel="Stylesheet" href="files/langselector.css" type="text/css">
<link rel="Stylesheet" href="files/search_rs.css" type="text/css">
<script src="files/jquery-1.9.1.min.js.téléchargement" type="text/javascript"></script>
<script src="files/bootstrap.min.js.téléchargement"></script>
<script src="files/modernizr.js.téléchargement" type="text/javascript"></script>
<script src="files/jquery-2.1.4.js.téléchargement" type="text/javascript"></script>
<script src="files/velocity.min.js.téléchargement" type="text/javascript"></script>
<script src="files/velocity.ui.min.js.téléchargement" type="text/javascript"></script>
<script src="files/main.js.téléchargement" type="text/javascript"></script>
<script src="files/main2.js.téléchargement" type="text/javascript"></script>

    <script>
        function ReplaceTagsByControls(idTag, idControl) {
            $("#" + idTag).replaceWith($("#" + idControl));
        }

            

        $(document).ready(function () {
            ReplaceTagsByControls('paginator_Marker', 'ctl00_pnl_Paginator');
ReplaceTagsByControls('WG_list_promo_Marker', 'ctl02_pnl_Products_List');
ReplaceTagsByControls('menu_prod1_Marker', 'ctl04_pnl_Menu_3');
ReplaceTagsByControls('menu_prod2_Marker', 'ctl06_pnl_Menu_3');
ReplaceTagsByControls('menu_prod3_Marker', 'ctl08_pnl_Menu_3');
ReplaceTagsByControls('menu_prod4_Marker', 'ctl10_pnl_Menu_3');
ReplaceTagsByControls('menu_prod5_Marker', 'ctl12_pnl_Menu_3');
ReplaceTagsByControls('top_menu_Marker', 'ctl14_pnl_Menu_3');
ReplaceTagsByControls('main_menu1_Marker', 'ctl16_pnl_Menu_3');
ReplaceTagsByControls('main_menu2_Marker', 'ctl18_pnl_Menu_3');
ReplaceTagsByControls('menu_rsp_Marker', 'ctl20_pnl_Menu_3');
ReplaceTagsByControls('top_menu_Marker', 'ctl22_pnl_Menu_3');
ReplaceTagsByControls('searchbox_Marker', 'ctl24_pnl_SearchBox_1');
ReplaceTagsByControls('langselector_Marker', 'ctl26_pnl_WG_SectionSelecor');
ReplaceTagsByControls('langselector_Marker', 'ctl28_pnl_WG_SectionSelecor');
ReplaceTagsByControls('search_rs_Marker', 'ctl30_pnl_SearchBox_1');


            var prm = Sys.WebForms.PageRequestManager.getInstance();

            prm.add_endRequest(function () {
                    
                });
        });
    </script>
<style type="text/css">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_dialog_advanced{border-radius:8px;padding:10px}.fb_dialog_content{background:#fff;color:#373737}.fb_dialog_close_icon{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{left:5px;right:auto;top:5px}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}.fb_dialog_close_icon:active{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{height:100%;left:0;margin:0;overflow:visible;position:absolute;top:-10000px;transform:none;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{background:none;height:auto;min-height:initial;min-width:initial;width:auto}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{clear:both;color:#fff;display:block;font-size:18px;padding-top:20px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .4);bottom:0;left:0;min-height:100%;position:absolute;right:0;top:0;width:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_mobile .fb_dialog_iframe{position:sticky;top:0}.fb_dialog_content .dialog_header{background:linear-gradient(from(#738aba), to(#2c4987));border-bottom:1px solid;border-color:#1d3c78;box-shadow:white 0 1px 1px -1px inset;color:#fff;font:bold 14px Helvetica, sans-serif;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:linear-gradient(from(#4267B2), to(#2a4887));background-clip:padding-box;border:1px solid #29487d;border-radius:3px;display:inline-block;line-height:18px;margin-top:3px;max-width:85px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{background:none;border:none;color:#fff;font:bold 12px Helvetica, sans-serif;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #4a4a4a;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f5f6f7;border:1px solid #4a4a4a;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);background-position:50% 50%;background-repeat:no-repeat;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
.fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}</style></head>
<body>
   <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="img/logo2.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>
<br><br>
<br>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index2.php">Acceuil</a>
                                </li>
                               
                              
                              
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="product_list.php">Produits</a>
                                </li>
                            </ul>
                        </div>
                        
</li>
<br>
<br>
<br>
<br>
<br>

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
    <!-- l faza l mauve -->
   

    <form method="post" action="Promotions.php" id="form1">
<div class="aspNetHidden">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
</div>



<script src="files/WebResource.axd" type="text/javascript"></script>

<link class="Telerik_stylesheet" type="text/css" rel="stylesheet" href="files/WebResource(1).axd">
<script src="files/ScriptResource.axd" type="text/javascript"></script>
<script src="files/ScriptResource(1).axd" type="text/javascript"></script>
<script src="files/ScriptResource(2).axd" type="text/javascript"></script>
<script src="files/ScriptResource(3).axd" type="text/javascript"></script>
<script src="files/ScriptResource(4).axd" type="text/javascript"></script>
<script src="files/ScriptResource(5).axd" type="text/javascript"></script>
<script src="files/ScriptResource(6).axd" type="text/javascript"></script>
<script src="files/ScriptResource(7).axd" type="text/javascript"></script>
<script src="files/ScriptResource(8).axd" type="text/javascript"></script>
<script src="files/ScriptResource(9).axd" type="text/javascript"></script>
<script src="files/ScriptResource(10).axd" type="text/javascript"></script>
<script src="files/ScriptResource(11).axd" type="text/javascript"></script>
<script src="files/ScriptResource(12).axd" type="text/javascript"></script>
<div class="aspNetHidden">

  <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="DEB804C6">
  <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAAeLpQ7l6WGPgYa+MoWC1E0g7d5e69q4PwAdLbZ0OYaWMoJ80o9z2+gxdx/p/ZkoMXDVVpGHFme02inwHzLjsqzbiAIvfpxfeFUAmDIXYHl6ldTHEApw8+mGWXDpTgecUBjoLUwNc/TiZyP74ZrKuO5KPRXBUIarBiyz7NEGXmLw6ayVST+so99Npew/E4DhCzs=">
</div>
        <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('scriptmanager1', 'form1', ['tctl00$upnl_Widget','ctl00_upnl_Widget','tctl02$upnl_Widget','ctl02_upnl_Widget','tctl26$upnl_Widget','ctl26_upnl_Widget','tctl28$upnl_Widget','ctl28_upnl_Widget'], [], [], 90, '');
//]]>
</script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
<script src="files/js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-69974026-1');
</script>
<div id="cd-produit">
<div id="close_produit">
<span class="line-one"></span>
<span class="line-three"></span>
</div>

</div>
<!-- cd-cart -->
<div id="cd-search">
<div id="cd-shadow-layer_s">&nbsp;</div>
<div class="content_search">
<div id="ctl24_pnl_SearchBox_1" class="SearchBox_1_Frame_CssClass">
    


  </div>
</div>
</div>
<!-- cd-search --><div class="top_inter">
<div class="top_header  hidden-xs">
<div class="container nopadding">
<div class="col-md-2 col-sm-2">
    
</div>
<div class="col-md-10 col-sm-10 hidden-xs">
<div class="top_right">
<div class="top_menu">
<div id="ctl14_pnl_Menu_3">
    
    <div id="top_menu">
        <div id="ctl14_pnl_Main_Frame">
      
            <div id="ctl14_rm_Menu_3" class="RadMenu RadMenu_Metro rmSized top_menu" style="height: 0px; width: 0px; z-index: 7000;">
        <ul class="rmRootGroup rmToggleHandles rmHorizontal">
                             <li class="rmItem rmLast"><a class="rmLink rmRootLink item" href="contact.html"><span class="rmText">Contact</span></a></li>

                    <li class="rmItem rmLast">
    <a class="rmLink rmRootLink item" href="checkout.php"><span class="rmText">Panier</span></a>
</li>
<li class="rmItem rmLast">
    <a class="rmLink rmRootLink item" href="vide.php"><span class="rmText">Mes commandes</span></a>
</li>


                    <li class="rmItem rmFirst">

<div class="clearfix"> </div>
</li>









        </ul><input id="ctl14_rm_Menu_3_ClientState" name="ctl14_rm_Menu_3_ClientState" type="hidden" autocomplete="off">
      </div>
        
    </div>
    </div>

  </div>
</div>

</div>
</div>
</div>
</div>
<div class="bottom_header  hidden-xs">
<div class="container nopadding">
<div class="flex_div">
<div class="menu_header1 col-md-4 col-sm-5 hidden-xs nopadding">
<div id="ctl18_pnl_Menu_3">
        
    

    </div>
</div>

<div class="menu_header2 col-md-4 col-sm-5 hidden-xs nopadding">
<div id="ctl20_pnl_Menu_3">
        
    <div id="main_menu2">
        <div id="ctl20_pnl_Main_Frame">
            
           
        
        </div>
    </div>

    </div>
</div>
</div>
</div>
</div>

<div class="slogan_promo"> </div>
</div>
<div class="inter_page">
<div class="container-fluid">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css2/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css2/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  
                            
                                
                            
<div class="content_inter">
<div class="clear">&nbsp;</div>
<div class="frame_service">


    <!-- start sidebar -->
    
    <!-- start content -->
  
            
             <div class="clearfix"></div>   
        </div>
        <!-- start header menu -->
        <br>
<br>
<br>
<br>
<br>

<div class="container">
    <div class="check">
             <div class="col-md-3 cart-total">  <form method="POST" action="checkout_final.php"></form>
                       <form method="POST" action="checkout_final.php">
             <div class="price-details">
                <br><br><br>
                 <h3  style="color:rgb(100, 165, 187)">Les Détails</h3> 
                 <br>
                 <span style="color:rgb(100, 165, 187)">Total</span>
                 <span class="total1"> <?php echo $somme." TND"; ?></span>
                 
                 <span style="color:rgb(100, 165, 187)">Date</span><br>
                 <span class="total1"><?php $date = new DateTime(); echo $date->format('Y-m-d H:i:s');?></span>
                 <span style="color:rgb(100, 165, 187)">Secteur</span>
                 <span>
                 <select name="secteur">
                  <option value="Ariana">
                    Ariana
                  </option>
                  <option value="Ben Arous">
                    Ben Arous
                  </option>
                  <option value="Manouba">
                    Manouba
                  </option>
                  <option value="Sokra">
                    Sokra
                  </option>
                 <option value="Sfax">
                    Sfax
                  </option>
                  <option value="Ghazela">
                    Ghazela
                  </option>
                  <option value="Bardo">
                     Bardo
                  </option>
                  <option value="El Manar">
                    El Manar
                  </option>
                  <option value="El Menzah">
                    El Menzah
                  </option>
                  <option value="Lac">
                    Lac
                  </option>
                </select>
                 </span>
                 <div class="clearfix"></div>
             </div>
             <ul class="total_price">
               <li class="last_price"> <h4>TOTAL</h4></li>
               <li class="last_price"><span><?php echo ($somme)." TND"; ?></span></li>
               <div class="clearfix"> </div>
             </ul><br>
             <br>
            
               <button  class="continue" style="background:rgb(100, 165, 187);
  padding:10px 60px;
  
  font-size:1em;
  color:#fff;
  text-decoration:none;
  display: block;
   font-weight: 600;  
   text-align: center;
   margin-bottom:2em;"   name="validercommande" ><span style="color:white" href="checkout_final.php">Valider la commande</span></button>
   
            
</form>
            
        
             
            </div>
         <div class="col-md-9 cart-items" >
                    

                
                                        <?PHP
                                    $produit2C=new produitC();
                                    $panier=$produit2C->recupererpanier($_SESSION['id']);
                        foreach($panier as $row)
                        {
                          $id=$row['id'];
  $chemin="";                             ?>
             <div class="cart-header">
                <div class="cart-sec simpleCart_shelfItem">
                        <div class="cart-item cyc">
                             <img src="<?php echo $chemin; ?>" class="img-responsive" alt=""/>
                        </div>
                       <div class="cart-item-info">
                        <h3><a href="#"><?PHP echo $row['nom']; ?></a></h3>
                        <ul class="qty">
                            <li><p style="color:rgb(100, 165, 187)" >Prix   : <?PHP echo $row['prix']." TND" ; ?></p></li>
                            <li><p style="color:rgb(100, 165, 187)" >Quantité : <?PHP echo $row['quantite']; ?></p></li>
                        </ul>

                             <div class="delivery">
                             <span></span>
                             <div class="clearfix"></div>
                        </div>
                       </div>
                       <div class="clearfix"></div>

                  </div>
             </div>
                          <?PHP
                }
?>
         </div>


            <div class="clearfix"> </div>
     </div>
     </div>
<div id="ctl00_pnl_Paginator">
    
    <div id="ctl00_upnl_Widget">
      
            <div id="paginator">
                <div id="ctl00_pnl_Widget_Frame">
        <div class="frame_paginator">
          <a id="ctl00_lkb_PreviousButton" href="javascript:__doPostBack(&#39;ctl00$lkb_PreviousButton&#39;,&#39;&#39;)"></a><a id="ctl00_lkb_NextButton" href="javascript:__doPostBack(&#39;ctl00$lkb_NextButton&#39;,&#39;&#39;)"></a>
        </div>
      </div>
            </div>
        
    </div>

  </div>
</div>
</div>
</div>
</div>

</div>


        <div id="pnl_Widgets" style="overflow-y:scroll;">
  

<style>
    #paginator input[type=number]::-webkit-inner-spin-button, #paginator input[type=number]::-webkit-outer-spin-button {-webkit-appearance: none; -moz-appearance: none; appearance: none; margin: 0; }
</style>



<div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div><div><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="files/d_vbiawPdxB.html" style="border: none;" __idm_frm__="64"></iframe></div></div></div>
<script>
    (function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.5&appId=591378830942563";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script type="text/javascript">
    function pageLoad() {
        $.getScript("http://platform.twitter.com/widgets.js");
        $.getScript("https://apis.google.com/js/plusone.js");
        FB.XFBML.parse();
    }
</script>













<script>
    function button_click(objTextBox, objBtnID) {
        if (window.event.keyCode == 13) {
            document.getElementById(objBtnID).focus();
            document.getElementById(objBtnID).click();
        }
    }
</script>




<script>
    function button_click(objTextBox, objBtnID) {
        if (window.event.keyCode == 13) {
            document.getElementById(objBtnID).focus();
            document.getElementById(objBtnID).click();
        }
    }
</script>



</div>

        <span id="lbl_Error"></span>
        

        <div id="updateProgress" style="display:none;" role="status" aria-hidden="true">
  
                <div class="FrontOfficeLoader"></div>
            
</div>

        <style>
            .sys-debugger {position: fixed;display: inline-block;width: 100%;min-height: 150px;border: 1px solid #808080;bottom: 0;font-size: 0;}
            .sys-debugger-widgets {display: inline-block;width: 50%;min-height: 150px;border: 1px solid #808080;bottom: 0;overflow: scroll;box-sizing: border-box;font-size: 12px;}
            .sys-debugger-sharedvariables {display: inline-block;width: 50%;min-height: 150px;border: 1px solid #808080;bottom: 0;overflow: scroll;box-sizing: border-box;font-size: 12px;}
            .FrontOfficeLoader {opacity: 0.7;position: fixed;left: 0px;top: 0px;width: 100%;height: 100%;z-index: 9999;background: url('/Images/App_002/Web/FrontOffice/FrontOfficeLoader.gif') 50% 50% no-repeat rgb(249,249,249);}
        </style>
    
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
<script type="text/javascript">
//<![CDATA[
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadMenu, {"_childListElementCssClass":null,"_flow":0,"_skin":"Metro","clientStateFieldID":"ctl04_rm_Menu_3_ClientState","collapseAnimation":"{\"duration\":450}","expandAnimation":"{\"duration\":450}","itemData":[{"navigateUrl":"/fr/produits/canapes","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/canapes-angle","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/fauteuils","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/pouf","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/bibliotheques","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/tables_basses","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/tables_appoint","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/consoles","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/meubles-tv","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/meubles-bar","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"}],"showToggleHandle":true}, null, null, $get("ctl04_rm_Menu_3"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadMenu, {"_childListElementCssClass":null,"_flow":0,"_skin":"Metro","clientStateFieldID":"ctl06_rm_Menu_3_ClientState","collapseAnimation":"{\"duration\":450}","expandAnimation":"{\"duration\":450}","itemData":[{"navigateUrl":"/fr/produits/tables-de-repas","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/chaises-et-tabourets","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/bahuts","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"}],"showToggleHandle":true}, null, null, $get("ctl06_rm_Menu_3"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadMenu, {"_childListElementCssClass":null,"_flow":0,"_skin":"Metro","clientStateFieldID":"ctl08_rm_Menu_3_ClientState","collapseAnimation":"{\"duration\":450}","expandAnimation":"{\"duration\":450}","itemData":[{"navigateUrl":"/fr/produits/chambre_a_coucher","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/lit","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/table_nuit","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/commodes-et-complements","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/semainiers","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"}],"showToggleHandle":true}, null, null, $get("ctl08_rm_Menu_3"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadMenu, {"_childListElementCssClass":null,"_flow":0,"_skin":"Metro","clientStateFieldID":"ctl10_rm_Menu_3_ClientState","collapseAnimation":"{\"duration\":450}","expandAnimation":"{\"duration\":450}","itemData":[{"navigateUrl":"/fr/produits/bureaux","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/miroirs","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/tableaux","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/coussins","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"}],"showToggleHandle":true}, null, null, $get("ctl10_rm_Menu_3"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadMenu, {"_childListElementCssClass":null,"_flow":0,"_skin":"Metro","clientStateFieldID":"ctl12_rm_Menu_3_ClientState","collapseAnimation":"{\"duration\":450}","expandAnimation":"{\"duration\":450}","itemData":[{"navigateUrl":"/fr/produits/bar","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/chaise_long","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/chaise_bar","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"}],"showToggleHandle":true}, null, null, $get("ctl12_rm_Menu_3"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadMenu, {"_childListElementCssClass":null,"_skin":"Metro","clientStateFieldID":"ctl14_rm_Menu_3_ClientState","collapseAnimation":"{\"duration\":450}","expandAnimation":"{\"duration\":450}","itemData":[{"navigateUrl":"/fr/services","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/actualites","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/espace_pro","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/contact","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"}],"showToggleHandle":true}, null, null, $get("ctl14_rm_Menu_3"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadMenu, {"_childListElementCssClass":null,"_skin":"Metro","clientStateFieldID":"ctl16_rm_Menu_3_ClientState","collapseAnimation":"{\"duration\":450}","expandAnimation":"{\"duration\":450}","itemData":[{"navigateUrl":"/fr/accueil","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/presentation","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/produits","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":" item  link_prod"}],"showToggleHandle":true}, null, null, $get("ctl16_rm_Menu_3"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadMenu, {"_childListElementCssClass":null,"_selectedItemIndex":"1","_selectedValue":"Promotions","_skin":"Metro","clientStateFieldID":"ctl18_rm_Menu_3_ClientState","collapseAnimation":"{\"duration\":450}","expandAnimation":"{\"duration\":450}","itemData":[{"navigateUrl":"/fr/showroom","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"selected":true,"navigateUrl":"/fr/promotions","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/nos_references","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"}],"showToggleHandle":true}, null, null, $get("ctl18_rm_Menu_3"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadMenu, {"_childListElementCssClass":null,"_flow":0,"_selectedItemIndex":"4","_selectedValue":"Promotions","_skin":"Metro","clientStateFieldID":"ctl20_rm_Menu_3_ClientState","collapseAnimation":"{\"duration\":450}","expandAnimation":"{\"duration\":450}","itemData":[{"navigateUrl":"/fr/accueil","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/presentation","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"items":[{"items":[{"navigateUrl":"/fr/produits/canapes","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/canapes-angle","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/fauteuils","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/pouf","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/bibliotheques","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/tables_basses","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/tables_appoint","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/consoles","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/meubles-tv","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/meubles-bar","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"}],"navigateUrl":"/fr/produits/sejour","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","outerCssClass":"subsubitem","cssClass":"item"},{"items":[{"navigateUrl":"/fr/produits/tables-de-repas","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/chaises","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/bahuts","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"}],"navigateUrl":"/fr/produits/salle_manger","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","outerCssClass":"subsubitem","cssClass":"item"},{"items":[{"navigateUrl":"/fr/produits/chambre_a_coucher","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/lit","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/table_nuit","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/semainiers","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"}],"navigateUrl":"/fr/produits/espace_nuit","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","outerCssClass":"subsubitem","cssClass":"item"},{"items":[{"navigateUrl":"/fr/produits/bureaux","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/miroirs","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/tableaux","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/coussins","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"}],"navigateUrl":"/fr/produits/accessoires","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","outerCssClass":"subsubitem","cssClass":"item"},{"items":[{"navigateUrl":"/fr/produits/bar","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/chaise_long","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/produits/chaise_bar","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"}],"navigateUrl":"/fr/produits/mobilier-exterieur","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","outerCssClass":"subsubitem","cssClass":"item"}],"disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","outerCssClass":"subitem","cssClass":"item"},{"navigateUrl":"/fr/showroom","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"selected":true,"navigateUrl":"/fr/promotions","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/nos_references","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"}],"showToggleHandle":true}, null, null, $get("ctl20_rm_Menu_3"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadMenu, {"_childListElementCssClass":null,"_skin":"Metro","clientStateFieldID":"ctl22_rm_Menu_3_ClientState","collapseAnimation":"{\"duration\":450}","expandAnimation":"{\"duration\":450}","itemData":[{"navigateUrl":"/fr/services","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/actualites","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"/fr/espace_pro","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"},{"navigateUrl":"contact.html","disabledCssClass":"","expandedCssClass":"item_hover","focusedCssClass":"","selectedCssClass":"item_hover","clickedCssClass":"item_hover","cssClass":"item"}],"showToggleHandle":true}, null, null, $get("ctl22_rm_Menu_3"));
});
Sys.Application.add_init(function() {
    $create(Sys.UI._UpdateProgress, {"associatedUpdatePanelId":null,"displayAfter":500,"dynamicLayout":true}, null, null, $get("updateProgress"));
});
//]]>
</script>
</form>


<iframe scrolling="no" frameborder="0" allowtransparency="true" src="files/widget_iframe.2e9f365dae390394eb8d923cba8c5b11.html" title="Twitter settings iframe" style="display: none;"></iframe></body></html>