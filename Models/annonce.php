<?php
	class rdv{
		private $id;
		private $nom;
		private $prenom;
		private $ntel;
		private $hdeb;
		private $hfin;

		
		
		function __construct($id, $nom,$prenom, $ntel, $hdeb, $hfin){
			$this->id=$id;
			$this->nom_inf=$nom;
			$this->prenom_inf=$prenom;
			$this->numtel_inf=$ntel;
			$this->heure_deb=$hdeb;
			$this->heure_fin=$hfin;
		}
		function getid(){
			return $this->id;
		}
		function getnom(){
			return $this->nom_inf;
		}
		function getprenom(){
			return $this->prenom_inf;
		}
		
		function getntel(){
			return $this->numtel_inf;
		}
		function gethdeb(){
			return $this->heure_deb;
		}
		function gethfin(){
			return $this->heure_fin;
		}
		function setid(int $id){
			$this->id=$id;
		}
		function setnom(string $nom){
			$this->nom_inf=$nom;
		}
		function setprenom(string $prenom){
			$this->prenom_inf=$prenom;
		}
		function setntel(string $ntel){
			$this->numtel_inf=$ntel;
		}
		function sethdeb(string $hdeb){
			$this->heure_deb=$hdeb;
		}
		function sethfin(string $hfin){
			$this->heure_fin=$hfin;
		}
	}


?>