<?php

require "autoload.models.php";
require "autoload.controlers.php";

$user="";
$id="";
if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])){


    $id = $_GET["id"];
    $u=new UserContr();
    $u->setId($id);

    $user=$u->getUserid();
}

?>