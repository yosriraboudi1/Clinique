<?PHP
include "../Model/produits.php";
include"../Controller/ProduitsC.php" ;
session_start();
$_SESSION['id']=2;
if(isset($_SESSION['id']))
{
$produitC=new produitC();
	if (( isset($_POST["quantite"])))
	{  



if(isset($_POST['modifierquantite']) && (isset ($_POST['quantite'])))
{ 
  $quantite=$_POST['quantite'];
  $verif=0;

   if($quantite<=0)
  {
    echo "<script>alert(\"La quantité doit etre superieur à 0\")</script>";
    $verif=1;
  }

}
}
}





{
		$produitC->modifierquantite($_POST["id"],$_POST["quantite"],$_SESSION['id']);
		header('Location: cart.php');
	}
?>