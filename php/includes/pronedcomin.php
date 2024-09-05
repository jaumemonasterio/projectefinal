<?php


if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])){


$comp = $_GET["id"];
$ned= $_SESSION["id"];

 require "autoload.models.php";
require "autoload.controlers.php";

$aj= new provesuscon();
$pro= $aj->getinscrus($comp, $ned);



}

?>