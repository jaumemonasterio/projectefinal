<?php

require "autoload.models.php";
require "autoload.controlers.php";


$id="";
if($_SERVER["REQUEST_METHOD"] == "GET"){


    $id = $_GET["id"];

    $com = new CompCon();

    $com->generarpdf($id);
    

}
header("Location: ../vista/competicionstec.php");


?>


