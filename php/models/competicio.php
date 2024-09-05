<?php




class competicio extends Conexio{

   protected function setcomp($nom, $lloc, $datai, $dataf, $piscina, $crono, $datafi){
  

    $error = false;
    $con=$this->connect();
    $stmt = $con->prepare("INSERT INTO `competicions` (`nom`, `lloc`, `datai`, `dataf`, `piscina`, `crono`, `datafi`) 
    VALUES (?,?,?,?,?,?,?)");

   

    if(!$stmt->execute(array($nom, $lloc, $datai, $dataf, $piscina,$crono, $datafi))){
        $error = true;
    }

    $id=$con->lastInsertId();
    $stmt = null;
    return $id;


   }

   protected function comp($id){
    $res = 1;
    $stmt = $this->connect()->prepare("SELECT * from competicions where id =?; ");
    
    if(!$stmt->execute(array($id))){
        $stmt = null;
        $res=2;
        exit();
    }
    if($stmt->rowCount()>0){
     $rs=$stmt->fetchAll();
     $res=$rs[0];  
    }

    

    return $res;



   }

    protected function getcomp(){

        $res = 1;
        $stmt = $this->connect()->prepare("SELECT * from competicions where datai> now(); ");
        
        if(!$stmt->execute(array())){
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