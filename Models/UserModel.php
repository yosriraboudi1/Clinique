<?php


class Utilisateur 
{
       private ?string $FirstName = null;
       private ?string $LastName = null ;
       private ?string $Email = null ;
       private ?string $Password = null ;
       private ?int $Tel = null ;
       private ?string $Adresse = null ;
       private ?string $date_de_naissance = null ;
       private ?string $role = null ;
       private ?int $verif = null;


     function __construct (  ){
    }

    public function getverif (){
        return $this->verif;
    }

   public function setverif (string $verif) {
       $this->verif = $verif;
    }


    public function getrole (){
        return $this->role;
    }

   public function setrole (string $role) {
       $this->role = $role;
    }

    public function getTel (){
        return $this->Tel;
    }

   public function setTel (string $Tel) {
       $this->Tel = $Tel;
    }

    public function getAdresse (){
        return $this->Adresse;
    }

   public function setAdresse (string $Adresse) {
       $this->Adresse = $Adresse;
    }

    public function getDate_de_naissance (){
        return $this->date_de_naissance;
    }

   public function setDate_de_naissance (string $date_de_naissance) {
       $this->date_de_naissance = $date_de_naissance;
    }


    
         public function getFirstName (){
             return $this->FirstName;
         }

        public function setFirstName (string $First) {
            $this->FirstName = $First;
         }

        public function getLastName (){
            return $this->LastName;
        }

        public function setLastName (string $LastName) {
            $this->LastName = $LastName;
        }


        public function getEmail (){
            return $this->Email;
        }

        public function setEmail (string $Email) {
            $this->Email = $Email;
        }

        public function getPassword (){
            return $this->Password;
        }

        public function setPassword (string $Password) {
            $this->Password = $Password;
            
        }





}

?>