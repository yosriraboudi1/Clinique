<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once("../../PHPMailer-master/PHPMailer-master/src/PHPMailer.php");
require_once("../../PHPMailer-master/PHPMailer-master/src/SMTP.php");
require_once("../../PHPMailer-master/PHPMailer-master/src/Exception.php");

include ("../../Model/UserModel.php");
include ("UserController.php");

$error = "";
// create user
$user = new Utilisateur();
// create an instance of the controller
/*echo '<script>
  alert("'. $_POST["Tel"] .  $_POST["Adresse"] .  $_POST["Date"] .  $_POST["roles"] .' ") ; //not showing an alert box.
  </script>';*/

$user=new Utilisateur();
$userC = new UtilisateurC();
    if (isset($_POST["Nom"])&& isset($_POST["Prenom"]) && isset($_POST["Email"]) && isset($_POST["Password"]) ) {
        $n=$_POST["Nom"];
    // collect value of input field
    $Password = $_POST['Password'];

// Cryptage du mot de passe
$hashed_password = password_hash($Password, PASSWORD_DEFAULT);
        $user->setFirstName($_POST['Nom']);
        $user->setLastName($_POST['Prenom']);
        $user->setEmail($_POST['Email']);
        $user->setPassword($hashed_password);
        $user->setTel($_POST["Tel"]);
        $user->setAdresse($_POST["Adresse"]);
        $user->setDate_de_naissance($_POST["Date"]);
        $user->setrole($_POST["roles"]);
        $user->setverif(0);
       

        
            $mail =new PHPMailer(true);
            $token = uniqid();
            $url="http://localhost/louay/louay/views/Front/emailverifier.php?token=$token" ;
           /* ini_set('sendmail_path', "\"C:\xampp\sendmail\sendmail.exe\" -t");
            ini_set('SMTP','smtp.gmail.com');
            ini_set('smtp_port', 2525);
            ini_set('smtp_ssl', 'auto');
            ini_set('auth_username','aissa.swiden@esprit.tn');
            ini_set('auth_password','201JMT1854');*/
            $mail1 ='med.achi94@gmail.com';
            $subject = 'verification mail';
            $message = "Bonjour, voici votre lien de verification : $url";
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= "From:" . $mail1 . "\r\n"; // Sender's E-mail
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        
           // $mail->SMTPDebug = 4;
            $mail->isSMTP(); // Paramétrer le Mailer pour utiliser SMTP 
            $mail->CharSet="UTF-8";
        
           // $mail->isSendmail();;
            $mail->Host = 'smtp.gmail.com'; // Spécifier le serveur SMTP
            $mail->SMTPAuth = true; // Activer authentication SMTP
            $mail->SMTPOptions = array(
                'ssl'=>array(
                    'verify_peer'=>false,
                    'verify_peer_name'=>false,
                    'allow_self_signed'=>true,
                )
                );
                $mail->SMTPSecure = 'tls'; // Accepter SSL
                $mail->Port = 587;
        
            $mail->Username = 'louay.ellouze@esprit.tn '; // Votre adresse email d'envoi
            $mail->Password = '211JMT6908'; // Le mot de passe de cette adresse email
            $mail->addAddress($_POST['Email']); 
            
          
            
           
        $mail->Subject ='verification mail';
        $mail->Body ="Bonjour, voici votre lien de verification : $url";
        $mail->isHTML(true);
        
        $mail->smtpConnect();
        //mail($_POST['mail'], $subject, $message, $headers )
            if ($mail->Send()) {
              $db = getConnexion();
                $stmt = $db->prepare("UPDATE utilisateur SET token = ? WHERE email = ?");
                $stmt->execute([$token, $_POST['email']]);
                echo "veuiller  confirmer votre email";
            } else {
                echo "Une erreur est survenue";
            }
        
        


        //$user->FirstName=$_POST['Nom'];
       
          $result = $userC->UserSignUpRecherche($user);
          echo "<script> alert('$result')</script>";
          if($result !=0 ){          
            echo "<script> alert('Email deja utilisee') </script>";
            header('location: ../../views/Front/LoginVue.php?emailError');
        }
        else
        {
        $userC->AjouterUtilisateur($user);
        header('location: ../../views/Front/LoginVue.php');

        }
      }
    else
       {
        $error = "Missing information";
        
       }

// Cryptage du mot de passe
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

      
        

        /*if ( $_POST["errorCode1"] === 0 &&  $_POST["errorCode2"] === 0 &&  $_POST["errorCode3"] === 0 ){
          $result = $userC->UserSignUpRecherche($user);
          if($result != null ){          
            echo "<script>alert('Email deja utilisee');
            window.location.href='../../views/Front/LoginVue.php'
            </script>";
            }
          
          if( $result == null) {
            $userC->AjouterUtilisateur($user);
            header('Location: ../../views/Front/profil.php');
          }
          
        }else{
          echo "<script>          alert('respecter le controle du saisie des champs');
          window.location.href='../../views/Front/LoginVue.php'
          </script>"; 
        }*/


?>

