<?php
	class rdv{
		private $cin;
		private $nom;
		private $prenom;
		private $tel;
		private $date_deb;
		private $date_fin;

		
		
		function __construct($cin , $nom , $prenom , $tel , $date_deb , $date_fin){
			$this->cin = $cin;
			
			$this->nom = $nom;

			$this->prenom = $prenom;
			$this->num_tel = $tel;
			$this->date_deb= $date_deb;
			$this->date_fin = $date_fin;
		}
		function getcin(){
			return $this->cin;
		}
		function getnom(){
			return $this->nom;
		}
		function getprenom(){
			return $this->prenom;
		}
		
		function getntel(){
			return $this->num_tel;
		}
		function getdatedeb(){
			return $this->date_deb;
		}
		function getdatefin(){
			return $this->date_fin;
		}
		function setcin(int $cin){
			$this->cin=$cin;
		}
		function setnom(string $nom){
			$this->nom=$nom;
		}
		function setprenom(string $prenom){
			$this->prenom=$prenom;
		}
		function settel(string $tel){
			$this->num_tel=$tel;
		}
		function setdatedeb(string $date_deb){
			$this->date_deb=$date_deb;
		}
		function setdatefin(string $date_fin){
			$this->heure_fin=$date_fin;
		}
	}


?>