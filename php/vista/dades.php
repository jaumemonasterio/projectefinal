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
include "../includes/sexresin.php";
include "../includes/dadesin.php";
$error="";
if (isset($_GET["error"])){
    $error=$_GET["error"];
}
?>

<div class="content">

<h1> Registre de nedadors </h1>

<form action="../includes/updatein.php" method="post">

        <div class="mb-3">
            <label for="uid"> <?= $error ?></label>
          
        </div>
        <div class="mb-3">
            <label for="uid"> nom d'usuari:</label>
            <input type="text" class="form-control" value="<?= $dades["uid_user"]?>" id="uid" placeholder="Enter your username" name="uid">
        </div>

        <div class="mb-3">
            <label for="nom">Nom:</label>
            <input type="text" class="form-control" id="nom" value="<?= $dades["nom"]?>" placeholder="Entra el teu nom " name="nom">
        </div>

        <div class="mb-3">
            <label for="cognom">cognom:</label>
            <input type="text" class="form-control" id="cognom"value="<?= $dades["cognom"]?>"  placeholder="Entra el teu cognom" name="cognom">
        </div>
        <div class="mb-3">
            <label for="datan">data de neixament:</label>
            <input type="calendar" class="form-control" id="datan" value="<?= $dades["dataneixament"]?>" placeholder="Entra la teva data de neixament" name="datan">
        </div>
        <div class="mb-3">
          <label for="telefon">telefon:</label>
          <input type="text" class="form-control" id="telefon" placeholder="Entra el vostre telefon" value="<?= $dades["telefon"]?>" name="telefon">
        </div>
        <div class="mb-3">
          <label for="sexe">sexe:</label>
          <select class="form-select" aria-label="Default select example" name="sexe"> 
            <option>Selecciona el teu sexe</option>
            <?php
           
            foreach ($sexes as $sex){
                if ($sex['id']== $dades["Sexe"]){
                    ?>
                    <option selected value="<?= $sex['id']; ?>"><?=$sex["sexe"];?></option>
                <?php
                } else{
                ?>
                <option value="<?= $sex['id']; ?>"><?=$sex["sexe"];?></option>
                
                <?php
            }
        }
            ?>
          </select>
        </div>
        <div class="mb-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" value="<?= $dades["email"]?>"name="email">
        </div>
        <button type="submit" class="btn btn-primary">modifica</button>
    </form>



</div>




<?php
include "foter.php";

?>
    
</body>
<script src="../../js/validacionum.js"></script>

</html>