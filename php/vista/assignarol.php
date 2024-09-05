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
include "../includes/adteclo.php";
include "../includes/getusserin.php";
?>

<div class="content">

<h1> Activa rols</h1>


<?php

if ($users==1)
{
?>

    <h1> No hi ha usuaris per activar rols</h1>
<?php
} else {
?>

<table  class="taules">
    <thead>
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>Cognom</th>
        </tr>
    </thead>

    <tbody>
        <?php

        foreach($users as $us ){

            ?>
            <tr>
                
            <td><?= $us['id'] ?></td>
            <td><?=$us['nom'] ?></td>
            <td><?=$us['cognom'] ?></td>
            <td><a href="vrols.php?id=<?=$us['id']?>">assigna rol </a></td>
            </tr>


            <?php
        }
        ?>

    </tbody>
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