<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username=$_POST["uid"];
    $pwd=$_POST["pwd"];


   require "autoload.models.php";
   require "autoload.controlers.php";

   $login= new UserContr();
   $login->set_username($username);
   $login->set_password($pwd);
   $login->login();

   

   


}

?>