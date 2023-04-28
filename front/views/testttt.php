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
  if($q1>$quantitedisponible)
  {
    echo "<script>alert(\"La quantité demandée n'est pas disponible dans le stock\")</script>";
    $verif=1;
  }

  if($q1<0)
  {
    echo "<script>alert(\"La quantité insérée est incorrecte\")</script>";
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
<?PHP
}
?>