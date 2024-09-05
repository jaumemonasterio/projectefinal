<?php

class provcom extends Conexio{

    protected function setprovacomp($sexe , $prova, $competi, $ordre){
  

        $error = false;
        $stmt = $this->connect()->prepare("INSERT INTO `provescomsexe` (`sexe`, `prova`, `ordre`, `competicio`)
 
        VALUES (?,?,?,?)");
    
        if(!$stmt->execute(array($sexe, $prova, $ordre, $competi ))){
            $error = true;
        }
        $stmt = null;
       return $error;
        
        
    
       }

       protected function getallorder($competi){


        $res = 1;
        $stmt = $this->connect()->prepare(" select k.id, k.ordre, p.distancia, p.estil, s.sexe from provescomsexe k , proves p , sexe s 
        where k.sexe=s.id and k.prova=p.id and k.competicio=? order by k.ordre;");
        
        if(!$stmt->execute(array($competi))){
            $stmt = null;
            $res=2;
            exit();
        }
        if($stmt->rowCount()>0){
         $res=$stmt->fetchAll();  
        }

        return $res;



       }

    }

?>