<?php
session_start();
if (isset($_SESSION["rol"])){

switch ($_SESSION["rol"]) {
    case 'admin':
        require 'navadmin.php';
        break;
    case 'tecnic':
        require 'navtecnic.php';
        break;

        case 'nedador':
        require 'navned.php';
        break;
    
    default:
        require "navdef.php";
        break;
}
}else{
    require "navdef.php";
}
?>

