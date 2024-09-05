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
include"../includes/pronedcomin.php";
?>

<div class="content">

<h1> proves </h1>



<?php

if ($pro==0){

    ?>

    <h1> No estàs inscrit a cap prova!!! </h1>

    <?php
} else{
?>
<table class="taules">
<?php
foreach ($pro as $in) {

?>
<tr>
   
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




<?php
include "foter.php";

?>
    
</body>
</html>