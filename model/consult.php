<?php
	class consult{
		private int $numero_const;
		private int $cin_patient;
		private string $nom_docteur;
		private string $nom_patient;
		private string $pr_patient;
		private string  $tel;
        private string  $motif;
        private string  $traitements;
		
		
		function __construct($numero_const,$cin_patient,$nom_docteur,$nom_patient, $pr_patient, $tel, $motif, $traitements){
			$this->numero_const=$numero_const;
			$this->cin_patient=$cin_patient;
			$this->nom_docteur=$nom_docteur;
			$this->nom_patient=$nom_patient;
			$this->pr_patient=$pr_patient;
			$this->tel=$tel;
            $this->motif=$motif;
			$this->traitements=$traitements;
		}
		function getnumero_const(){
			return $this->numero_const;
		}
		function getcin_patient(){
			return $this->cin_patient;
		}
		function getnom_docteur(){
			return $this->nom_docteur;
		}
		
		function getnom_patient(){
			return $this->nom_patient;
		}
		function getpr_patient(){
			return $this->pr_patient;
		}
		function gettel(){
			return $this->tel;
		}
        function getmotif(){
			return $this->motif;
		}
        function gettraitements(){
			return $this->traitements;
		}
		function setnumero_const(int $numero_const){
			$this->numero_const=$numero_const;
		}
		function setcin_patient(int $cin_patient){
			$this->cin_patient=$cin_patient;
		}
		function setnom_patient(string $nom_patient){
			$this->nom_patient=$nom_patient;
		}
		function setpr_patientl(string $pr_patient){
			$this->pr_patient=$pr_patient;
		}
		function settel(string $tel){
			$this->tel=$tel;
		}
		function setmotif(string $motif){
			$this->motif=$motif;
		}
        function settraitements(){
			return $this->traitements;
		}
	}


?>