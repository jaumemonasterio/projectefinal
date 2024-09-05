<?php

require "autoload.models.php";
require "autoload.controlers.php";


$id="";
if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])){


    $id = $_GET["id"];
    $p=new provesuscon();
    

    $inscripcions=$p->getinscr($id);
}

?>