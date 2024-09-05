<?php


include "../../configuracions/config.php";

class Conexio {

    protected function connect(){
        try {
           $con = new PDO('mysql:host='. config::HOST .';dbname='. config::BD, config::USER, config::PASS);
           //$con = new PDO('mysql:host="localhost";dbname="projecte_fi","root",""');
            //$con = new PDO('mysql:host=localhost;dbname=projecte_fi', 'root','');
            return $con;
        } catch (PDOException $e) {
            return "Error!: ". $e->getMessage()."<br>";
        }
    }
}





