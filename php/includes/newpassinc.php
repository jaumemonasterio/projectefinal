<?php


if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["send"])){

    // recoger datos del formulario
    $password = $_POST["pwd"];
    $repeatPassword = $_POST["repeatPwd"];
    $token = $_POST["token"];

    //instanciar las classes
    require "autoload.models.php";
    require "autoload.controlers.php";

    $newPass = new UserContr();
    $newPass->set_Password($password);
    $newPass->set_password2($repeatPassword);
    $newPass->setToken($token);

    
    
   
    //ejecutar gestor de errores i crear nuevo password
     $newPass->newPassword();

     
   

    //rederigir a la pagina de login
    header("Location: ../vista/pasok.php");

}


?>