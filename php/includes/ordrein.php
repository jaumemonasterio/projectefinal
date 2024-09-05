<?php 


if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])){


   $id = $_GET["id"];


    require "autoload.models.php";
   require "autoload.controlers.php";

   $aj= new procomcon();
   $aj-> setcompeti($id);
   $or= $aj->getorder();










}


?>