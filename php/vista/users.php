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
include  "../includes/tecniclo.php";
include "../includes/usersin.php";
include "../includes/rolin.php"
?>

<div class="content">

<h1> <?= $nom?></h1>



<?php

if ($dades==1){
    ?>
    <h1> Ep no hi han nedadors a la basse de dades  </h1>
    
    <?php
}else{

?>


<table class="taules">

<tr>
    <th>Nom</th>
    <th>cognom</th>
    <th>sexe</th>
    <th>email</th>
</tr>

<?php
foreach ($dades as $dada) {
    ?>
    <tr>
        <td> <?= $dada["nom"]?></td>
        <td> <?= $dada["cognom"]?></td>
        <td>  <?= $dada["sexe"]?></td>
        <td> <?= $dada["email"]?></td>

        <?php
}
?>
</table>
<?php
}

?>



















</div>




<?php
include "foter.php";

?>
    
</body>
</html>