
<?php
require "autoload.models.php";
require "autoload.controlers.php";


$p=new ProvesCon();
$proves=$p->getproves();


header('Content-Type: application/json');
echo json_encode($proves);

