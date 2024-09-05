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
include "../includes/ordrein.php"
?>

<div class="content">


<h1> competicio</h1>

<table>
    <tr>
        <td>ordre </td>
        <td> prova</td>
        <td> sexe</td>
    </tr>

    <?php

    foreach($or as $ordre ){

        ?>
        <tr>
            <td> <?= $ordre['ordre']; ?></td>
            <td>  <?= $ordre["distancia"]." ". $ordre["estil"]?></td>
            <td>  <?= $ordre["sexe"]?></td>
            <td>  
                <?php 
                
                if (isset($_SESSION["username"])){

                    ?>
                <a href="../includes/apuntamin.php?id=<?=$ordre["id"]?>"> apunta'm</a></td>
                    <?php
                }
         ?>

        </tr>
        <?php
    }
    
    ?>
</table>

</div>




<?php
include "foter.php";

?>
    
</body>
</html>