<?php

class Proves extends Conexio{


    protected function getallproves(){

        $res = 1;
        $stmt = $this->connect()->prepare("SELECT * from proves; ");
        
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