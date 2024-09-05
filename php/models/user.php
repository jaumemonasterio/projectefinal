<?php

class User extends Conexio
{


    protected function usernamexists($username)
    {

        $error = 0;
        $stmt = $this->connect()->prepare("SELECT * from usuaris WHERE uid_user = ? ");

        if (!$stmt->execute(array($username))) {
            $error = 1;
        }

        if ($stmt->rowCount() > 0) {
            $error = 2;
        }

        $stmt = null;
        return $error;
    }

   protected function    tokenexpire($token){

          $stmt = $this->connect()->prepare("SELECT timestampdiff(MINUTE, creacio, now())as diff FROM usuaris WHERE token = ?;");
        if(!$stmt->execute(array($token))){
            $stmt = null;
            //header("Location: ../view/newpassword.php?error=stmtfailed");
            exit();
        }
        $diff = -1;
        if($stmt->rowCount()>0){
            $res = $stmt->fetchAll();
            $diff = $res[0]['diff'];
        }

        return $diff;
    }
    protected function    setstatus($token){

        $error = false;
        $stmt = $this->connect()->prepare("UPDATE usuaris set actiu= ?, token=null, creacio=null where token = ?");
        $status = 1;
        if(!$stmt->execute(array($status, $token))){
           $error = true;   
        }

        $stmt = null;
        return $error;
  }
  protected function    setrolus($rol, $us){

    $error = false;
    $stmt = $this->connect()->prepare("UPDATE usuaris set rol= ? where id = ?");
    if(!$stmt->execute(array($rol, $us))){
       $error = true;   
    }

    $stmt = null;
    return $error;
}

    protected function toexits($token){

        $error = false;
        $stmt = $this->connect()->prepare("SELECT * from usuaris WHERE token = ? ");

        if (!$stmt->execute(array($token))) {
            $error = false;
        }

        if ($stmt->rowCount() > 0) {
            $error = true;
        }

        $stmt = null;
        return $error;


    }
     protected function getusid($id){

        $res = 1;
        $stmt = $this->connect()->prepare("select id , nom , cognom  from usuaris where id =? ; ");
        
        if(!$stmt->execute(array($id))){
            $stmt = null;
            $res=2;
            exit();
        }
        if($stmt->rowCount()>0){
         $res=$stmt->fetchAll();  
        }

        return $res[0];

     }

    protected function getusnorol(){

        $res = 1;
        $stmt = $this->connect()->prepare("select id , nom , cognom  from usuaris where rol is null and actiu=?; ");
        
        $actiu=1;
        if(!$stmt->execute(array($actiu))){
            $stmt = null;
            $res=2;
            exit();
        }
        if($stmt->rowCount()>0){
         $res=$stmt->fetchAll();  
        }

        return $res;


    }

    protected function ver($username, $password){
        
        $error = False;
        $stmt = $this->connect()->prepare("SELECT u.id,  u.password, r.tipus  from usuaris u,  rolS r 
        where u.uid_user =? and u.actiu=? and r.id=u.rol;");
        $actiu=1;
        if(!$stmt->execute(array($username, $actiu))){
            $stmt = null;
            $error = true;
            exit();
        }
        if($stmt->rowCount()>0){
            $res = $stmt->fetchAll();
            $stmt=null;
        $passwordbd = $res[0]['password'];
        if(password_verify($password, $passwordbd)==false){
            $error = true;
        }else{
            $error = false;
            session_start();
            $id=$res[0]['id'];
            $_SESSION["id"]=$id;
            $_SESSION["username"] = $username;
            $_SESSION["rol"]=$res[0]['tipus'];
        } 
        } else{
            $error = true;

        }

        return $error;


    }
    protected function setNewPassword($token, $password){
        $error = false;
        $stmt = $this->connect()->prepare("UPDATE usuaris set password= ?, token=null, creacio=null where token = ?");
        
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        if(!$stmt->execute(array($hashedPwd, $token))){
           $error = true;   
        }

        $stmt = null;
        return $error;
    }

    protected function getdades($id){
        $res = 1;
        $stmt = $this->connect()->prepare("SELECT * from usuaris where id =?; ");
    
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

    protected function getned ($rol){
        $res = 1;
        $stmt = $this->connect()->prepare("SELECT  u.nom , u.cognom, u.email, s.sexe  
        FROM usuaris u , sexe s  WHERE u.rol=?  and s.id=u.sexe;");
    
        
            if(!$stmt->execute(array($rol))){
                $stmt = null;
                $res=2;
                exit();
            }
            if($stmt->rowCount()>0){
            $res=$stmt->fetchAll();  
            }

    

    return $res;




    }
    protected function setTokenUser($token, $email){
        $error = false;
        $stmt = $this->connect()->prepare("UPDATE usuaris set token= ? where email = ?");
        
        if(!$stmt->execute(array($token, $email))){
           $error = true;
            
        }
        $stmt = null;
        return $error;
    }

    protected function checkUserByEmail($email){
        $stmt = $this->connect()->prepare("SELECT uid_user FROM usuaris WHERE email = ?;");
        if(!$stmt->execute(array($email))){
            $stmt = null;
            header("Location: ../vista/forgotpassword.php?error=stmtfailed");
            exit();
        }
        $resultCheck = false;
        if($stmt->rowCount()>0){
            $resultCheck = true;
        }

        return $resultCheck;
    }

 protected function newuser($username, $email, $nom, $cognom, $telefon, $sexe, $data_naixement, 
            $password, $token){

                

                $error = false;
                $stmt = $this->connect()->prepare("INSERT INTO `usuaris` (`uid_user`, `password`, `email`, 
                               `nom`, `cognom`, `dataneixament`, `telefon`, `Sexe`, `token`) 
                            VALUES (?,?,?, ?,?,?,?,?,?);");
        
                $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        
                if(!$stmt->execute(array($username, $hashedPwd, $email, $nom, $cognom, $data_naixement, $telefon, $sexe,$token))){
                    $error = true;
                }
                $stmt = null;
                return $error;
        

            }


            protected function upuser($username, $email, $nom, $cognom, $telefon, $sexe, $data_naixement, $id){

                

                $error = false;
                $stmt = $this->connect()->prepare("UPDATE usuaris SET uid_user = ?,
                email = ?, 
                nom = ?, cognom = ?, 
                dataneixament = ?,telefon = ?,
                Sexe = ? WHERE (id = ?)");
               
        
                if(!$stmt->execute(array($username, $email, $nom, $cognom, $data_naixement, $telefon, $sexe,$id))){
                    $error = true;
                }
                $stmt = null;
                return $error;
        

            }


}






?>