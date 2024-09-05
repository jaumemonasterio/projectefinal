<?php 
spl_autoload_register("myAutoLoadModel");

function myAutoLoadModel($classname){
    $extension = ".php";
    $path = "../models/";
    $fullpath = $path.$classname.$extension;

    if(!file_exists($fullpath)){
        return false;
    }

    require $fullpath;
}