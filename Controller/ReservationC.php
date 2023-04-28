<?php
  require "../../Models/reservation.php";
 class Reservation {
    
    public static function getAll(){
        
        $db = connect_db();
        $rty = "select * from reservation";
        $listee = [];
        try {
            $aze = $db->query($rty);
            $listee = $aze->fetchAll(PDO::FETCH_OBJ);
        }catch (PDOExecption $e){
            die ($e->getMessage());
        }
        return $listee ;
    }
    public static function getByCin($cin){
        $db = connect_db();
        $rty="select * from reservation where cin=$cin";
        try {
            $aze=$db->query($rty);
            if ($aze->rowCount()==1){
                $reservation = $aze->fetchObject();
                return $reservation;
            }
            else {
                return false ;
            }
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public static function insert($cin , $tel , $nom , $prenom ,$date_deb , $date_fin , $commentaire , $id_ann){
        
        $db=connect_db();
        $rty = "insert into reservation (cin , num_tel , nom , prenom , date_deb , date_fin , comm , id_ann )values(:cin , :tel , :nom , :prenom , :date_deb , :date_fin , :commentaire , :id_ann)";
        $aze= $db->prepare($rty);
            $aze->bindParam(":cin",$cin);
            $aze->bindParam(":tel",$tel);
            $aze->bindParam(":nom",$nom);
            $aze->bindParam(":prenom",$prenom);
            $aze->bindParam(":date_deb",$date_deb);
            $aze->bindParam(":date_fin",$date_fin);
            $aze->bindParam(":commentaire",$commentaire);
            $aze->bindParam(":id_ann",$id_ann);
        try {
           $resultat = $aze->execute();
           if ($resultat){
                return $db->LastInsertId();
                header('Location: ..\view\front\page_annonce.php');
           }
        }catch(PDOException $e){
            die ($e->getMessage());
        }
    }
    
//sqlInjection
    public static function Update($cin_modif,$tel,$nom,$prenom,$date_deb,$date_fin,$commentaire){
        
        $db=connect_db();
        $rty="update reservation 
        set cin=:cin_modif ,num_tel=:tel_modif ,nom=:nom_modif ,prenom=:pren_modif ,date_deb=:date_deb_modif ,date_fin=:date_fin_modif ,comm=:comm_modif
        where cin=:cin_modif";
        $prep = $db->prepare($rty);
        $prep->bindParam(":nom_modif" , $nom);
        $prep->bindParam(":pren_modif" , $prenom);
        $prep->bindParam(":tel_modif" , $tel);
        $prep->bindParam(":date_deb_modif" , $date_deb);
        $prep->bindParam(":date_fin_modif" , $date_fin);
        $prep->bindParam(":cin_modif" , $cin_modif);
        $prep->bindParam(":comm_modif" , $commentaire);
        try{
            $aze=$prep->execute();
            return $aze ;
            
        }catch(PDOException $e){
            die($e->getMessage());
        }

    }

    
    

    public static function deleteCIN ($cin){
    $db =connect_db();
        
        $rty="delete from reservation where cin=$cin";
        try{
            $aze=$db->exec($rty);
           
            return $aze;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
   }
?>