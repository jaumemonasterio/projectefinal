<?php

require "autoload.models.php";
require "autoload.controlers.php";


$id="";
if($_SERVER["REQUEST_METHOD"] == "GET"){


    $id = $_GET["id"];

    $com = new CompCon();

    $com->envmn($id);
    

    
}
header("Location: ../vista/competicionstec.php");


?>