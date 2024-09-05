<?php

trait validacions
{

    function validate_input($input)
    {
        $input = trim($input);
        $input = htmlspecialchars($input);
        $input = stripslashes($input);
        return $input;
    }

    public function esvuit ($imput){

        if (empty($imput)){
            return true;
        } else{
            return false;
        }
    }

    function validarEmail($email) {
        // Patró d'expressió regular per validar adreces de correu electrònic
        $patro = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
        
        // Comprova si l'adreça de correu electrònic compleix el patró
        return preg_match($patro, $email);
    }




}



?>