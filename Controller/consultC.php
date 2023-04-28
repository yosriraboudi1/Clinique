<?php
	include '../config.php';

	include_once '../Model/consult.php';
	class consultC {
		function afficherconsult(){
			$sql="SELECT * FROM consult";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerconsult($numero_const){
			$sql="DELETE FROM consult WHERE numero_const=:numero_const";
			$db = config::getConnexion();
			
			$req=$db->prepare($sql);
			$req->bindValue(':numero_const', $numero_const);
			
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouterconsult($consult){
			$sql="INSERT INTO consult(numero_const,cin_patient, nom_docteur,nom_patient,pr_patient,tel,motif,traitements) 
			VALUES ( :numero_const,:cin_patient, :nom_docteur,:nom_patient,:pr_patient,:tel,:motif,:traitements )";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'numero_const' => $consult->getnumero_const(),
					'cin_patient' => $consult->getcin_patient(),
					'nom_docteur' => $consult->getnom_docteur(),
                    'nom_patient' => $consult->getnom_patient(),
                    'pr_patient' => $consult->getpr_patient(),
					'tel' => $consult->gettel(),
					'motif' =>$consult->getmotif(),
                    'traitements' => $consult->gettraitements()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererC($numero_const){
			$sql="SELECT * from consult where numero_const=$numero_const";
			
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$consult=$query->fetch();
				return $consult;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierconsult($consult, $numero_const){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE consult SET 
						numero_const= :numero_const, 
						cin_patient= :cin_patient,
						nom_docteur= :nom_docteur, 
                        nom_patient= :nom_patient,
                        pr_patient= :pr_patient,
						tel= :tel,
                        motif= :motif,
                        traitements= :traitements
                        
						
						
					WHERE numero_const= :numero_const'
				);
				$query->execute([
					'numero_const' => $consult->getnumero_const(),
					'cin_patient' => $consult->getcin_patient(),
					'nom_docteur' => $consult->getnom_docteur(),
                    'nom_patient' => $consult->getnom_patient(),
                    'pr_patient' => $consult->getpr_patient(),
					'tel' => $consult->gettel(),
					'motif' => $consult->getmotif(),
                    'traitements' => $consult->gettraitements()
					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				echo $e->getMessage(); // afficher l'erreur pour déboguer
			}
		}
	}
		
?>