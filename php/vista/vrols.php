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
include "../includes/useridin.php";
include "../includes/getrolsin.php";
?>

<div class="content">

<h1> assigna rol</h1>
<div>

<h2> Rol per l'usuari: <?= $user["nom"] . " " . $user["cognom"]?></h2>
    <form action="../includes/userassinrolin.php" method="post">
        <label for="rol">Rol:</label>
        <select name="rol" id="">
            <?php
            foreach ($rols as $rol) {

                if (!($rol["Tipus"]=="admin" && $_SESSION["rol"]=="tecnic") ){
                ?>
                <option value="<?= $rol['id']; ?>"><?=$rol['Tipus'];?></option>
                <?php
                }
            }
                ?>

        </select>
        <input type="hidden" name="user" value="<?=$id?>">
        <button type="submit" class="btn btn-primary" name ="send">Submit</button>

    </form>
</div>
</div>v






<?php
include "foter.php";

?>
    
</body>
</html>