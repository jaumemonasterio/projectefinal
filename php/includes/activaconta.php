<?php


if (isset($_GET["token"])){
    $token = $_GET["token"];
    require "autoload.models.php";
    require "autoload.controlers.php";
 
    $actvacio= new UserContr();
    $actvacio->setToken($token);
    $actvacio->actconta();
 

}




?>