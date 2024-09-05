<?php


session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username=$_POST["uid"];
    $nom=$_POST["nom"];
    $cognom=$_POST["cognom"];
    $datan=$_POST["datan"];
    $sexe=$_POST["sexe"];
    $email=$_POST["email"];
    $tel=$_POST["telefon"];
    $id=$_SESSION["id"];
   require "autoload.models.php";
   require "autoload.controlers.php";

   $signup= new UserContr($username, $nom, $cognom, $tel,$sexe,$datan,$email);
   $signup->udapte($id);






}
?>