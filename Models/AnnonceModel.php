<?php
 class Annonce {
    private $id ; 
    private $nom ;
    private $prenom ;
    private $num_tel;
    private $hdeb;
    private $hfin ;
    
    public function __construct($id=null , $nom=null , $prenom=null , $num_tel=null , $hdeb=null , $hfin=null){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->num_tel = $num_tel;
        $this->hdeb= $hdeb;
        $this->hfin = $hfin;
    }

    public static function getAll(){
        
        $db = connect_db();
        $req = "select * from annonce";
        $liste = [];
        try {
            $res = $db->query($req);
            $liste = $res->fetchAll(PDO::FETCH_OBJ);
        }catch (PDOExecption $e){
            die ($e->getMessage());
        }
        return $liste ;
    }
    public static function getById($id){
        $db = connect_db();
        $req="select * from annonce where id=$id";
        try {
            $res=$db->query($req);
            if ($res->rowCount()==1){
                $annonce = $res->fetchObject();
                return $annonce;
            }
            else {
                return false ;
            }
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public static function insert($nom , $prenom , $numtel , $hdeb , $hfin){
        
        $db=connect_db();
        $req = "insert into annonce (nom_inf , prenom_inf , numtel_inf , heure_deb , heure_fin )values(:nom , :prenom , :numtel , :hdeb , :hfin)";
        $res= $db->prepare($req);
            $res->bindParam(":nom",$nom);
            $res->bindParam(":prenom",$prenom);
            $res->bindParam(":numtel",$numtel);
            $res->bindParam(":hdeb",$hdeb);
            $res->bindParam(":hfin",$hfin);
        try {
           $resultat = $res->execute();
           if ($resultat){
                return $db->LastInsertId();
           }
        }catch(PDOException $e){
            die ($e->getMessage());
        }
    }
    
//sqlInjection
    public static function Update($id_modif ,$nom , $prenom , $numtel , $hdeb , $hfin){
        
        $db=connect_db();
        $req="update annonce  
        set nom_inf=:nom_modif ,prenom_inf=:pren_modif ,numtel_inf=:num_tel_modif ,heure_deb=:heure_deb_modif ,heure_fin=:heure_fin_modif 
        where id=:id_modif";
        $prep = $db->prepare($req);
        $prep->bindParam(":nom_modif" , $nom);
        $prep->bindParam(":pren_modif" , $prenom);
        $prep->bindParam(":num_tel_modif" , $numtel);
        $prep->bindParam(":heure_deb_modif" , $hdeb);
        $prep->bindParam(":heure_fin_modif" , $hfin);
        $prep->bindParam(":id_modif" , $id_modif);
        try{
            $res=$prep->execute();
            return $res ;
            
        }catch(PDOException $e){
            die($e->getMessage());
        }

    }

    
    

    public static function delete ($id){
    $db =connect_db();
        
        $req="delete from annonce where id=$id";
        try{
            $res=$db->exec($req);
            return $res ;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
   






}
?>