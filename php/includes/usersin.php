<?php
require "autoload.models.php";
require "autoload.controlers.php";

$rol="";
if (isset($_SESSION["id"])){
    $rol=$_GET["rol"];
    $us= new UserContr();
    $dades=$us->getusers($rol);
}