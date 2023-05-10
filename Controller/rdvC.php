<?php
	include '../../config.php';

	include_once '../../Models/rdv.php';
	class rdvC {
		function afficherrdv(){
			$sql="SELECT * FROM rdv";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerrdv($cin){
			$sql="DELETE FROM rdv WHERE cin=:cin";
			$db = config::getConnexion();
			
			$req=$db->prepare($sql);
			$req->bindValue(':cin', $cin);
			
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouterrdv($rdv){
			$sql="INSERT INTO rdv(cin, nom, prenom, email,tel,date,heure) 
			VALUES (:cin,:nom,:prenom,:email,:tel,:date,:heure )";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'cin' => $rdv->getcin(),
					'nom' => $rdv->getnom(),
					'prenom' => $rdv->getprenom(),
			
					'email' => $rdv->getemail(),
					'tel' => $rdv->gettel(),
					'date' => $rdv->getdate(),
                    'heure' => $rdv->getheure()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererR($cin){
			$sql="SELECT * from rdv where cin=$cin";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$rdv=$query->fetch();
				return $rdv;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierrdv($rdv, $cin){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE rdv SET 
						nom= :nom, 
						prenom= :prenom,
						email= :email, 
						tel= :tel,
                        date= :date,
                        heure= :heure
						
					WHERE cin= :cin'
				);
				$query->execute([
					'nom' => $rdv->getnom(),
					'prenom' => $rdv->getprenom(),
					'email' => $rdv->getemail(),
					'tel' => $rdv->gettel(),
					'date' => $rdv->getdate(),
                    'heure' => $rdv->getheure(),
					'cin' => $cin
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				echo $e->getMessage(); // afficher l'erreur pour déboguer
			}
		}
	}
		
?>