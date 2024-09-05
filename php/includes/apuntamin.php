<?php

session_start();


if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])){


    $prova = $_GET["id"];
    $userid=$_SESSION["id"];


 
 
     require "autoload.models.php";
    require "autoload.controlers.php";
 
    $provus= new provesuscon($prova,$userid);
    $provus->aput();

    header("location:../vista/competicions.php");
 
 
 
} 

