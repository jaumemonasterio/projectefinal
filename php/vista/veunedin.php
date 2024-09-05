<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>botiswim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="../../css/estils.css" rel="stylesheet" >
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<?php
include "nav.php";
include "../includes/incripcionin.php";
?>

<div class="content">

<h1> inscripcions</h1>


<div class="container-fluid">


<?php
if ($inscripcions=="0"){

    ?>

    <h1> no hi ha encara nedadors inscrits</h1>

    <?php
} else{


?>


<a href="../includes/pdfiin.php?id= <?=$id; ?>"><button class="btn btn-primary" > descarrega convocatoria en pdf</button></a>
<?php
if (isset($_SESSION["rol"])){
if ( $_SESSION["rol"]=="tecnic"){
?>
    <a href="../includes/enconvin.php?id=<?=$id; ?>"><button class="btn btn-primary" > enviar  convocatoria en pdf als nedadors </button></a>
<?php
}
}
?>
<table class="taules">
    <tr>
        <th>nedador</th>
        <th>prova</th>
    </tr>
    <?php
    foreach ($inscripcions as $in) {

        ?>
        <tr>
            <td><?= $in['nom']. " ". $in["cognom"]; ?></td>
            <td> <?= $in['distancia']. ' '. $in['estil']?></td>
        </tr>

        <?php
    }
    ?>
</table>
<?php
}
?>

</div>


</div>




<?php
include "foter.php";

?>
    
</body>
</html>