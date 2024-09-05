<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username=$_POST["uid"];
    $nom=$_POST["nom"];
    $cognom=$_POST["cognom"];
    $datan=$_POST["datan"];
    $sexe=$_POST["sexe"];
    $email=$_POST["email"];
    $tel=$_POST["telefon"];
    $pwd=$_POST["pwd"];
    $pwd2=$_POST["pwd2"];

   require "autoload.models.php";
   require "autoload.controlers.php";

   $signup= new UserContr($username, $nom, $cognom, $tel,$sexe,$datan,$email, $pwd,   $pwd2);
   $signup->registerUser();







}
?>
