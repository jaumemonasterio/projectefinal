<?php


if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["send"])){

$rol=$_POST["rol"];
$user=$_POST["user"];


require "autoload.models.php";
require "autoload.controlers.php";


$rols= new UserContr();
$rols->setrol($user,$rol);



header("location: ../../index.php");





}

?>