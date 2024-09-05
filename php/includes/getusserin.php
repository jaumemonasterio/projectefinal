<?php

require "autoload.models.php";
require "autoload.controlers.php";

$us= new UserContr();

$users= $us->getuser();

?>