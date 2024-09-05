<?php

$dades="";
if (isset($_SESSION["id"])){
    $id = $_SESSION["id"];
    $us= new UserContr();
    $dades=$us->getdadesid($id);
}