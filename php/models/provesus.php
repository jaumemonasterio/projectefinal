


<?php


 class provesus extends Conexio{

    protected function apu($user, $prova){
        $error = false;
        $stmt = $this->connect()->prepare("INSERT INTO `provesuser` (`prova`, `user`)
        VALUES (?,?)");
    
        if(!$stmt->execute(array( $prova, $user))){
            $error = true;
        }
        $stmt = null;
       return $error;

    }
    protected function mailsned($comp){

        $res = 0;
        $stmt = $this->connect()->prepare("select distinct u.nom, u.cognom, u.email  from  usuaris u, 
        competicions c, proves p ,provescomsexe s, provesuser r  
        where c.id=s.competicio and p.id=s.prova and s.id=r.prova and u.id=r.user and c.id =?;");
        
        if(!$stmt->execute(array($comp))){
            $stmt = null;
            $res=2;
            exit();
        }
        if($stmt->rowCount()>0){
         $res=$stmt->fetchAll();  
        }

        return $res;


    }


    
    protected function inscripcions($comp){

        $res = 0;
        $stmt = $this->connect()->prepare("select  u.nom, u.cognom, p.distancia, p.estil  from  usuaris u, competicions c, proves p ,provescomsexe s, provesuser r  
where c.id=s.competicio and p.id=s.prova and s.id=r.prova and u.id=r.user and c.id =?;");
        
        if(!$stmt->execute(array($comp))){
            $stmt = null;
            $res=2;
            exit();
        }
        if($stmt->rowCount()>0){
         $res=$stmt->fetchAll();  
        }

        return $res;


    }




    
    protected function inscripcionsned($comp, $ned){

        $res = 0;
        $stmt = $this->connect()->prepare("select  u.nom, u.cognom, p.distancia, p.estil  from  usuaris u, competicions c, proves p ,provescomsexe s, provesuser r  
        where c.id=s.competicio and p.id=s.prova and s.id=r.prova and u.id=r.user and c.id =? and u.id=?;");
        
        if(!$stmt->execute(array($comp, $ned))){
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

