<?php

include ("../../Model/UserModel.php");
include ("UserController.php");
require_once("C:xampp\htdocs\louay\louay\PHPMailer-master\PHPMailer-master\src\PHPMailer.php");
require("C:xampp\htdocs\louay\louay\PHPMailer-master\PHPMailer-master\src\SMTP.php");
require("C:xampp\htdocs\louay\louay\PHPMailer-master\PHPMailer-master\src\Exception.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$error = "";
// create user
$user = new Utilisateur();
// create an instance of the controller

$userC = new UtilisateurC();
    if (isset($_POST["Email"]) && isset($_POST["Password"]) ) {
    // collect value of input field
        $user->setEmail($_POST['Email']);
        $user->setPassword($_POST['Password']);
        //$user->FirstName=$_POST['Nom'];

        
    }
    else
        $error = "Missing information";
        $verif = $userC->VerifUtilisateur($user->getEmail());
        echo "<script>alert(". $verif[0] .");</script>";
        
        if( $verif[0] != 1 ){          
          echo "<script>alert('check your email account ');
          window.location.href='../../views/Front/LoginVue.php'
          </script>";
          $db = getConnexion();
          $mail =new PHPMailer(true);
          $token = uniqid();
          $url="http://localhost/louay/louay/views/Front/ActivateAccount.php?token=$token" ;
          $htmlContent = ' 
          <html> 
          <head> 
              <title>ACTIVATE ACCOUNT</title> 
          </head> 
          <body> 
              <h1>Bonjour, voici votre lien d activation</h1> 
              <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
                  <tr> 
                      <th>Name:</th><td>WEBSITE</td> 
                  </tr> 
                  <tr style="background-color: #e0e0e0;"> 
                      <th>Email:</th><td>contact@OurWebsite.com</td> 
                  </tr> 
                  <tr> 
                      <th>Lien Activation:</th><td><a href="' .$url.  '">LIEN</a></td> 
                  </tr> 
              </table> 
          </body> 
          </html>'; 
         /* ini_set('sendmail_path', "\"C:\xampp\sendmail\sendmail.exe\" -t");
          ini_set('SMTP','smtp.gmail.com');
          ini_set('smtp_port', 2525);
          ini_set('smtp_ssl', 'auto');
          ini_set('auth_username','aissa.swiden@esprit.tn');
          ini_set('auth_password','201JMT1854');*/
          $mail1 ='med.achi94@gmail.com';
          $subject = 'Mot de passe oublié';
          $message = "Bonjour, voici votre lien de reinitialisation : $url";
          $headers = 'MIME-Version: 1.0' . "\r\n";
          $headers .= "From:" . $mail1 . "\r\n"; // Sender's E-mail
          $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
          $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
      
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
          $mail->addAddress($user->getEmail());
      
          
        
          
         
          $mail->Subject ='Mot de passe oublié';
          $mail->Body ="Bonjour, voici votre lien de reinitialisation : $url";
          $mail->isHTML(true);
          $mail->MsgHTML($htmlContent);
      
      
          $mail->smtpConnect();
          //mail($_POST['mail'], $subject, $message, $headers )
          //mail->mail($_POST['email'], $subject, $htmlContent, $headers);
              if ($mail->Send()) {
                  $stmt = $db->prepare("UPDATE utilisateur SET token = ? WHERE Email = ?");
                  $stmt->execute([$token, $user->getEmail()]);
                  echo "E-mail envoyé";
              } else {
                  echo "Une erreur est survenue";
              }
          }
          else{
              //  if(password_verify($_POST['Password'], $passwordtest->getPassword()[0]) ){
              //    echo "<script>alert('Mot de passe incorrect');
              //    window.location.href='../../views/Front/LoginVue.php'
              //    </script>";
              //   }
              //   else{
                            session_start();
                            $_SESSION["user"]=$user->getEmail();
                            // $userl = $userC->login($user->getEmail(), $user->getPassword() );
                            header('location: ../../views/Front/Profil.php');
                        
                              echo $_SESSION["user"];
                    //} 
            }




?>