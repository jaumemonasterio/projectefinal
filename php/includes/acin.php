<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){

$nom=$_POST["nom"];
$lloc=$_POST["lloc"];
$datai=$_POST["datai"];
$dataf=$_POST["dataf"];
$datafi=$_POST["datafi"];
$pis=$_POST["pis"];
$crono=$_POST["crono"];



require "autoload.models.php";
require "autoload.controlers.php";



//print_r($_POST);
$comp=new CompCon($nom,$datai,$dataf, $lloc, $crono, $pis, $datafi);
$id=$comp->insertarComp();
$i=0;
$pro="pro";
$or="or";
$sex="se";
// echo $pro.$i;
// echo $_POST[$pro.$i];


while(isset($_POST[$pro.$i]) && isset($_POST[$or.$i]) && isset($_POST[$sex.$i])){

    $prova=$_POST[$pro.$i];
    $ordre=$_POST[$or.$i];
    $sexe=$_POST[$sex.$i];


     //echo $prova."<br> ";
    // echo $ordre."<br> ";
    // echo $sexe."<br> ";
    $provcom=new procomcon($prova, $id, $sexe, $ordre);
    $provcom->setcomp();
    $i++;


}



 header("Location: ../vista/competicionstec.php");






}
?>
