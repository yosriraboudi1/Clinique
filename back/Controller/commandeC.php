<?php
include_once "../config.php";

class commandeC
{
	
	function ajoutercommande($commande)
	{
		$sql="insert into commande (idCommande,dateCommande,montantCommande,etatCommande,lieuLivraison,prixLivraison,idClient) values (:idCommande,:dateCommande,:montantCommande,:etatCommande,:lieuLivraison,:prixLivraison,:idClient)";
		$db = config::getConnexion();
		
		try
		{
       
        $idCommande=$commande->get_idCommande();
        $dateCommande=$commande->get_dateCommande();
        $montantCommande=$commande->get_montantCommande();
        $etatCommande=$commande->get_etatCommande();
        $lieuLivraison=$commande->get_lieuLivraison();
        $prixLivraison=$commande->get_prixLivraison();
        $idClient=$commande->get_idClient();

        $req=$db->prepare($sql);
     
		$req->bindValue(':idCommande',$idCommande);
		$req->bindValue(':dateCommande',$dateCommande);
		$req->bindValue(':montantCommande',$montantCommande);
		$req->bindValue(':etatCommande',$etatCommande);
		$req->bindValue(':lieuLivraison',$lieuLivraison);
		$req->bindValue(':prixLivraison',$prixLivraison);
		$req->bindValue(':idClient',$idClient);
		
        $req->execute();
           
        }

        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }

	}

	


	function recuperercommandes()
	{
   		$sql="SELECT * from commande";
		$db = config::getConnexion();
		
		try
		{
		$liste=$db->query($sql);
		$liste->execute();
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}

	function recuperercommande($idCommande)
	{
   		$sql="SELECT * from commande where idCommande=$idCommande";
		$db = config::getConnexion();
		
		try
		{
		$liste=$db->query($sql);
		$liste->execute();
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}

	function supprimercommande($idCommande)
	{
		$sql="DELETE FROM commande where idCommande= :idCommande";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idCommande',$idCommande);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	

	
	 function trieD(){
		$sql="SELECT * from commande order by lieuLivraison asc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	} 
    function triec(){
		$sql="SELECT * from commande order by montantCommande desc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function triedate(){
		$sql="SELECT * from commande order by dateCommande desc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function getAllcommandeS($keywords){
		$sql="SELECT * FROM commande WHERE CONCAT(`idCommande`,`dateCommande`,`etatCommande`,`lieuLivraison`,`prixLivraison`,`idClient`,`montantCommande`) LIKE '%".$keywords."%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
function recherche($id){  
            try{
                $sql="SELECT * FROM commande WHERE dateCommande = '$dateCommande' ";
                $db=config::getConnexion();
               return $db->query($sql);
            }
            catch(PDOException $e){
                $e->getMessage();
            }
        
        }




}




?>