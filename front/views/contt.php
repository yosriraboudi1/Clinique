<?PHP
include "../Model/produits.php";
include"../Controller/ProduitsC.php" ;
 include_once "../Controller/commandeC.php";
 include_once "../Model/commande.php";
session_start();
$_SESSION['id']=2;  
if(isset($_SESSION['id']))
{

if(isset($_POST["idCommande"]))
{
  $idrecup=$_POST["idCommande"];
  //echo $idrecup;
}

$commande1C=new commandeC();
$produit=new produitC;
$commandes=$commande1C->recuperercontenucommande($idrecup);
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>KH store</title>
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
                       

                          <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">about</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        product
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="product_list.php"> product list</a>
                                        <a class="dropdown-item" href="single-product.html">product details</a>
                                        
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="login.php"> 
                                            login
                                            
                                        </a>
                                        <a class="dropdown-item" href="checkout.html">product checkout</a>
                                        <a class="dropdown-item" href="cart.php">shopping cart</a>
                                        <a class="dropdown-item" href="confirmation.html">confirmation</a>
                                        <a class="dropdown-item" href="elements.html">elements</a>
                                    </div>
                                </li>
                                
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_2"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="blog.html"> blog</a>
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                    </div>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex align-items-center">
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                                <a class="rmLink rmRootLink item" href="cart.php"></a>
</li>

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
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>Checkout</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

    <link href="css0/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css0/style.css" rel='stylesheet' type='text/css' />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css0/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js0/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js0/menu_jquery.js"></script>
<script src="js0/simpleCart.min.js"> </script>



























    <link href="http://www.meubleskarray.com/fr/promotions" rel="shortcut icon" type="image/x-icon">

    <script src="files/cb=gapi.loaded_0" async=""></script><script src="files/sdk.js.téléchargement" async="" crossorigin="anonymous"></script><script id="facebook-jssdk" src="files/sdk.js(1).téléchargement"></script><script type="text/javascript" async="" src="files/analytics.js.téléchargement"></script><script type="text/javascript">
        //Stop Form Submission of Enter Key Press
        function stopRKey(evt) {
            var evt = (evt) ? evt : ((event) ? event : null);
            var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
            if ((evt.keyCode == 13) && (node.type == "text")) { return false; }
            if ((evt.keyCode == 13) && (node.type == "password")) { return false; }
        }
        document.onkeypress = stopRKey;
    </script>

    
<meta name="" content="&quot;promotion meubles , promotion meubles tunis , promotion meubles karray , promotion karray furniture , promotions karray furniture , promotion meuble tunisie , promotion meuble soukra , promotion meubles l" aouina,="" promotion="" meubles="" ,="" tunis="" promotions="" karray="" meuble="" tunisie="" soukra="" l'aouina="" "="" tunisie;="" tunis;="" salon="" ;="" et="" decoration'="">
<link rel="stylesheet" href="files/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/recherche.css">
<link rel="Stylesheet" href="files/layout_fr.css" type="text/css">
<link rel="Stylesheet" href="files/font-awesome.css" type="text/css">
<link rel="Stylesheet" href="files/interne.css" type="text/css">
<link rel="Stylesheet" href="files/top_page.css" type="text/css">
<link rel="Stylesheet" href="files/check.css" type="text/css">
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
    <form method="post" action="Promotions.html" id="form1">
<div class="aspNetHidden">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


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

</div>

</div>
<!-- cd-cart -->
<div id="cd-search">
<div id="cd-shadow-layer_s">&nbsp;</div>
<div class="content_search">
<div id="ctl24_pnl_SearchBox_1" class="SearchBox_1_Frame_CssClass">
        
    <div id="searchbox">
        
        
        
        <a id="ctl24_lkb_SearchButton" class="SearchBox_1_SearchButton_CssClass" href="javascript:__doPostBack(&#39;ctl24$lkb_SearchButton&#39;,&#39;&#39;)"></a>
    </div>

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
        
    <div id="main_menu1">
        <div id="ctl18_pnl_Main_Frame">
            
            <div id="ctl18_rm_Menu_3" class="RadMenu RadMenu_Metro rmSized menu" style="height: 0px; width: 0px; z-index: 7000;">
                <ul class="rmRootGroup rmToggleHandles rmHorizontal">
                    
                </ul><input id="ctl18_rm_Menu_3_ClientState" name="ctl18_rm_Menu_3_ClientState" type="hidden" autocomplete="off">
            </div>
        
        </div>
    </div>

    </div>
</div>
<div class="col-md-4 nopadding col-sm-2 col-xs-10">
<!--<a href="index.html" class="logo"><img alt="" src="img/99.png" class="img-responsive"></a>-->
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
<div class="visible-xs-block ">
<div class="header_resp">
<div class="col-xs-6">
<!--<a href="index.html" class="logo"><img alt="" src="img/99.png" class="img-responsive"></a>-->
</div>
<div class="col-xs-6">
<a id="menu_rs" class="menu_resp pull-right" href="http://www.meubleskarray.com/fr/promotions#">
<div class="nav-trigger">
<span class="line-one"></span>
<span class="line-two"></span>
<span class="line-three"></span>
</div>
</a></div>
</div>
</div>

<div class="slogan_promo"> </div>
</div>
<div class="inter_page">
<div class="container-fluid">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  
                            
                                
                            
<div class="content_inter">
<div class="clear">&nbsp;</div>
<div class="frame_service">

<div class="container">
<div class="women_main">
    <!-- start sidebar -->
    
    <!-- start content -->
    <div class="col-md-9 w_content">
        <div class="women">
            
            
             <div class="clearfix"></div>   
        </div>
        <!-- start header menu -->
        
<div class="container">
    <div class="check">
            
        
        
                                          
<table class="table table-bordered table-striped mb-none"  id="myTable2" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                            <thead>
                            <h3 style="color:rgb(131, 41, 148)">Les détails de la commande numéro:  <?php echo $idrecup; ?></h3><br>
                                <tr> 
                                                    
                                                    <th style="color:rgb(131, 41, 148)">Nom</th>
                                                    <th style="color:rgb(131, 41, 148)">Quantite</th>
                                                    <th style="color:rgb(131, 41, 148)">Prix</th>
                                                    <th style="color:rgb(131, 41, 148)">Total</th>
                                                    <th style="color:rgb(131, 41, 148)">image</th>
                                                </tr>
                                                        <?PHP
                                                   foreach($commandes as $row)
                                                     {
                                                 ?>
                                                 <tr>
                                                   
                                                   <td><?PHP echo $row['nom']; ?></td>
                                                   <td><?PHP echo $row['quantite']; ?></td>
                                                   <td><?PHP echo $row['prix']." TND" ; ?></td>
                                                   <td><?PHP echo $row['prix']*$row['quantite']." TND" ;?></td>
                                                  <!-- <td><img src="<?PHP echo $chemin="images/produit".$row['id'].".jpg" ;?>" width="150px" height="150px" ></td> -->
                                                  <td><img src="images/produit/666.jpg"></td>
                                                   
                                                 </tr>
  
                                                 <?PHP
                                                     }
                                                 ?>
                                                </tr>
</thead>






                                        </tr>
                                    </tbody>
                                </table>
                                    
                                    
 

 <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
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
</div>
</div>
</div>
</form>
  <!--================Cart Area =================-->
 <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="footer_iner section_bg">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-8">
                        <div class="footer_menu">
                            <div class="footer_logo">
                                <a href="index.html"><img src="img/khstore.png" alt="#"></a>
                            </div>
                            <div class="footer_menu_item">
                                <a href="index.html">Home</a>
                                <a href="about.html">About</a>
                                <a href="product_list.html">Products</a>
                                <a href="#">Pages</a>
                                <a href="blog.html">Blog</a>
                                <a href="contact.html">Contact</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="social_icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
      
    </footer>
            
  <!--================End Cart Area =================-->
    <!--::footer_part start::-->
   
    
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