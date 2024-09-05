<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){


    $email = $_POST['email'];


require "autoload.models.php";
require "autoload.controlers.php";

$pas= new UserContr();
$pas->set_email($email);

$pas->reppas();


header("location: ../vista/userres.php");





}

?>