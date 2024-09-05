<?php



class Rols extends Conexio{

   protected function getrolsid(){
    
    $res = 1;
    $stmt = $this->connect()->prepare("select * from rols ;");
    
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

   protected function getrolsnomid($id){
    
    $res = 1;
    $stmt = $this->connect()->prepare("select * from rols where id=? ;");
    
    if(!$stmt->execute(array($id))){
        $stmt = null;
        $res=2;
        exit();
    }
    if($stmt->rowCount()>0){
        $rs=$stmt->fetchAll();
        $res=$rs[0]["Tipus"]; 

    }

    return $res;




   }
}
?>