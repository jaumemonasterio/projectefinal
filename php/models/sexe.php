

<?php

class sexe extends Conexio{


    protected function getallsexe(){

        $res = 1;
        $stmt = $this->connect()->prepare("SELECT * from sexe; ");
        
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
    protected function getms(){

        $res = 1;
        $stmt = $this->connect()->prepare("SELECT * from sexe where id <> ?; ");
        
        $id=3;
        if(!$stmt->execute(array($id))){
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