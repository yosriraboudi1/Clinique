<?php
	class rdv{
		private int $cin;
		private string $nom;
		private string $prenom;
		private string $email;
		private string $tel;
	
		private string  $date;
        private string  $heure;

		
		
		function __construct($cin, $nom,$prenom, $email, $tel, $date, $heure){
			$this->cin=$cin;
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->email=$email;
			$this->tel=$tel;
			$this->date=$date;
            $this->heure=$heure;
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
		
		function getemail(){
			return $this->email;
		}
		function gettel(){
			return $this->tel;
		}
		function getdate(){
			return $this->date;
		}
        function getheure(){
			return $this->heure;
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
		function setemail(string $email){
			$this->email=$email;
		}
		function settel(string $tel){
			$this->tel=$tel;
		}
		function setdate(string $date){
			$this->date=$date;
		}
        function setheure(){
			return $this->heure;
		}
	}


?>