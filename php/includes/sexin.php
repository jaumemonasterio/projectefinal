
<?php
require "autoload.models.php";
require "autoload.controlers.php";


$s=new Sexecon();
$sexes= $s->getsexe(); 


header('Content-Type: application/json');
echo json_encode($sexes);

