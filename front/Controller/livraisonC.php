<?PHP
include "../config.php";
class livraisonC {
function afficherlivraison ($livraison){
		echo "id: ".$livraison->getId()."<br>";
		echo "etatLivraison: ".$livraison->getEtatLivraison()."<br>";
		echo "lieuLivraison: ".$livraison->getLieuLivraison()."<br>";
		echo "prixLivraison: ".$livraison->getPrixLivraison()."<br>";
        echo "modePaiement: ".$livraison->getModePaiement()."<br>";

	}
	function ajouterlivraison($livraison){
		$sql="insert into livraison (lieuLivraison,prixLivraison,modePaiement) values (:lieuLivraison,:prixLivraison,:modePaiement)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
	


        $lieuLivraison=$livraison->getLieuLivraison();
		$prixLivraison=$livraison->getPrixLivraison();
		//$idLivreur=$livraison->getIdLivreur();
		
		$modePaiement=$livraison->getModePaiement();

		//$req->bindValue(':etatLivraison',$etatLivraison);
		$req->bindValue(':lieuLivraison',$lieuLivraison);
        $req->bindValue(':prixLivraison',$prixLivraison);
        //$req->bindValue(':idLivreur',$idLivreur);
        $req->bindValue(':modePaiement',$modePaiement);				
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function getAllLivraisonS($keywords){
		$sql="SELECT * FROM livraison WHERE CONCAT(`id`,  `etatLivraison`,`etatLivraison`, `lieuLivraison` ,`prixLivraison`,`modePaiement`) LIKE '%".$keywords."%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherlivraisons(){
		//$sql="SElECT * From livraison e inner join formationphp.livraison a on e.idclient= a.idclient";
		$sql="SElECT * From livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerlivraison($id){
		$sql="DELETE FROM livraison where id= $id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierlivraison($livraison,$id){
		$sql="UPDATE livraison SET id=:id, nom=:nom,adresse=:adresse,numtel=:numtel,numLivraison=:numLivraison WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $nom=$livraison->getnom();
        $adresse=$livraison->getadresse();
        $numtel=$livraison->getnumtel();
		$numLivraison=$livraison->getnumLivraison();
		$datas = array(':id'=>$id, ':id'=>$id, ':nom'=>$nom,':adresse'=>$adresse,':numtel'=>$numtel,':numLivraison'=>$numLivraison);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':numtel',$numtel);	
        $req->bindValue(':numLivraison',$numLivraison);			
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
function recupererlivraison($id){
		$sql="SELECT * from livraison where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListelivraisons($numtel){
		$sql="SELECT * from livraison where numtel=$numtel";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
}


?>