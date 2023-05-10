<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../../config1.php' ;

class UtilisateurC 
{

    public function Modifier_Profile($email , $user)
    {           
            $pdo = getConnexion();

        try{
            $query = $pdo->prepare('UPDATE utilisateur SET FirstName=:FirstName , LastName=:LastName , Email=:Email , tel=:tel , adresse=:adresse WHERE Email =:em');
            $query->bindValue(':FirstName',$user->getFirstName());
            $query->bindValue(':LastName',$user->getLastName());
            $query->bindValue(':Email',$user->getEmail());
            $query->bindValue(':tel',$user->getTel());
            $query->bindValue(':adresse',$user->getAdresse());
            $query->bindValue(':em',$email);
            
            $query->execute();
            
        }
        catch (PDOExeption $e){ 
            $e->getMessage();
            
        }
        
    }


      public function AjouterUtilisateur($user)
        {
                $pdo = getConnexion();


            try {
                $query = $pdo->prepare(
                    'INSERT INTO utilisateur (FirstName , LastName , Email , Password , Role , date_de_naissance , tel , adresse  )
                                 VALUES(:FirstName , :LastName , :Email , :Password , :Role , :date_de_naissance , :tel , :adresse ) '
                 );
                    $query->bindValue(':FirstName',$user->getFirstName());
                    $query->bindValue(':LastName' ,$user->getLastName());
                    $query->bindValue(':Email',$user->getEmail());
                    $query->bindValue(':Password',$user->getPassword());
                    $query->bindValue(':tel',$user->getTel());
                    $query->bindValue(':adresse',$user->getAdresse());
                    $query->bindValue(':date_de_naissance',$user->getDate_de_naissance());
                    $query->bindValue(':Role',$user->getrole());
                    $query->execute();

                    session_start();
                    /*session is started if you don't write this line can't use $_Session  global variable*/
                    $_SESSION["user"]=$user->getEmail();
                    /*session created*/
                   // echo $_SESSION["newsession"];
                    /*session was getting*/

                    

                }
            catch (PDOExeption $e){ 
                $e->getMessage();
                unset($_SESSION["user"]);
            }

        }

        public function AfficherUtilisateur()
        {
                $pdo = getConnexion();

             try{
                 $query = $pdo->prepare('SELECT * FROM utilisateur');
                 $query->execute();

                 $result = $query->fetchALL();
             }
             catch(PDOException $e) {
                 $e->getMessage();
             }
            return $result ;
        }
        
      
        public function ModiferrUtilisateur($email , $mtp)
        {           
                //require '../../config1.php' ;
                $pdo = getConnexion();

            try{
                $query = $pdo->prepare('UPDATE utilisateur SET Password = :Password WHERE Email = :Email');
                $query->bindValue(':Password',$mtp);
                $query->bindValue(':Email',$email);
                
                $query->execute();
                
            }
            catch (PDOExeption $e){ 
                $e->getMessage();
                
            }
            
        }
        public function DeleteUtilisateur($email)
        {              
                  $pdo = getConnexion();

            echo $email;
            try{
                $query = $pdo->prepare('DELETE FROM utilisateur WHERE Email = :Email');
                $query->bindValue(':Email',$email);
                
                $query->execute();

                session_start();
                    unset($_SESSION["user"]);

                 //header('Location: http://localhost/Projet2/');
                
            }
            catch (PDOExeption $e){ 
                $e->getMessage();
                
            }
        }

        public function VerifUtilisateur($email){
            $pdo = getConnexion();
            try{

                $query = $pdo->prepare(
                    'SELECT verif FROM utilisateur WHERE  Email = :Email ');
                    $query->bindValue(':Email',$email);
                    $query->execute();
                    $result =$query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_LAST);
                }
                catch (PDOExeption $e){ 
                $e->getMessage();
                
                  }
                     return $result;
        }
        
        
        public function ChercherUtilisateur($user)
        {
                $pdo = getConnexion();

            try{

                $query = $pdo->prepare(
                    'select * from utilisateur where Email =:Email AND Password =:Password' );
                    $query->bindValue(':Email',$user->getEmail());
                    $query->bindValue(':Password',$user->getPassword());
                    $query->execute();
                    $result = $query->fetchAll();
                }
                catch (PDOExeption $e){ 
                $e->getMessage();
                
                  }
                     return $result ;
                        
        }
        public function UserSignUpRecherche($user)
        {
                $pdo = getConnexion();

            try{
                    $query = $pdo->prepare('SELECT Email FROM utilisateur WHERE Email = :Email');
                    $query->bindValue(':Email',$user->getEmail());
                    
                    $query->execute(); 
                    $result = $query->fetchALL();
                    
                }
                catch (PDOExeption $e){ 
                    $e->getMessage();
                }

                return $query->rowCount();
        
                        
                        
        }




 public function DeleteUtilisateurAdmin($email)
        {              

                require '../../config1.php' ;
                $pdo = getConnexion();

            try{
                $query = $pdo->prepare('DELETE FROM utilisateur WHERE Email = :Email');
                $query->bindValue(':Email',$email);
                
                $query->execute();
                
            }
            catch (PDOExeption $e){ 
                $e->getMessage();
                
            }
        }

        
        public function RechercheAdmin($email)
        {
                $pdo = getConnexion();

            try{
                    $query = $pdo->prepare('SELECT * FROM utilisateur WHERE Email LIKE "%:Email%" ');
                    $query->bindValue(':Email',$email);
                    
                    $query->execute(); 
                    $result = $query->fetchALL();
                
                }
                catch (PDOExeption $e){ 
                    $e->getMessage();
                    
                }

                return $result ;
        
                        
                        
        }

        function login($username, $mdp)
        {
            $pdo = getConnexion();

            try{
                    $query = $pdo->prepare('SELECT * FROM utilisateur WHERE Email =:Email AND Password =:Password;');
                    $query->bindValue(':Email',$username);
                    $query->bindValue(':Password',$mdp);
                    
                    $query->execute(); 
                    $result =$query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_LAST);
                   // $result = $query->fetchALL();
                
                }
                catch (PDOExeption $e){ 
                    $e->getMessage();
                    
                }

        }  
        function count(){
            $sql = "SELECT COUNT(*) AS count FROM utilisateur ";
            $db = getConnexion();
            try{
                $query=$db->prepare($sql);
                $query->execute();
                $nbre = $query->fetch(PDO::FETCH_ASSOC)['count'];
                return $nbre;
            }
            catch(PDOException $e){
                error_log("Erreur lors de la récupération du nombre de blogs: " . $e->getMessage(), 0);
                die("Erreur lors de la récupération du nombre de blogs.");
            }
        }
    
function afficherblog1($offset, $blogsParPage){
    $sql="SELECT * FROM utilisateur LIMIT :offset, :limit ";
    $db = getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->bindParam(':offset', $offset, PDO::PARAM_INT);
        $query->bindParam(':limit', $blogsParPage, PDO::PARAM_INT);
        $query->execute();

        $liste = $query->fetchAll(PDO::FETCH_ASSOC);
        return $liste;
    }
    catch(PDOException $e){
        die('Erreur:'. $e->getMessage());
    }
}
}

?>