<?PHP

include"../../config.php" ;
include"../Controller/ProduitsC.php" ;  
$_SESSION['id']=2;
if(isset($_SESSION['id']))
{
$produitC=new produitC();
if (isset($_POST["id"])){
	$produitC->supprimerproduit($_POST['id'],$_SESSION['id']);
	header('Location: cart.php');
}
}
?>