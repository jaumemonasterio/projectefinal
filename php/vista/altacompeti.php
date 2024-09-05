<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>botiswim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="../../css/estils.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <?php
    include "nav.php";
    if(!isset($_SESSION["username"])){
        header("location: ../../index.php");

    }
    include "../includes/tecniclo.php";
    ?>



    <div class="content">

        <h1> Nova competicio</h1>

        <form action="../includes/acin.php" method="post">
            <div class="mb-3">
                <label for="nom"> nom competicio</label>
                <input type="text" class="form-control" id="nom" placeholder="nom competicio" name="nom">
            </div>

            <div class="mb-3">
                <label for="lloc"> lloc de la competicio</label>
                <input type="text" class="form-control" id="lloc" placeholder="lloc de la competicio" name="lloc">

            </div>

            <div class="mb-3">
                <label for="Datai">Data inici de la competicio:</label>
                <input type="date" class="form-control" name="datai" id="datai">
            </div>


            <div class="mb-3">
                <label for="dataf">data final de la competicio:</label>
                <input type="date" class="form-control" id="dataf" name="dataf">
            </div>

            <div class="mb-3">
                <label for="Datai">Data fi innscripcions:</label>
                <input type="date" class="form-control" name="datafi" id="datafi">
            </div>

            <div class="mb-3">
                <label for="piscina">tipus piscina:</label>
                <select class="form-select" aria-label="Default select example" name="pis">
                    <option selected>Selecciona el tipus de piscina</option>
                    <option value="25">curta</option>
                    <option value="50">Llarga</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="piscina">tipus crono:</label>
                <select class="form-select" aria-label="Default select example" name="crono">
                    <option selected>Selecciona el tipus de crono</option>
                    <option value="M"> Manual</option>
                    <option value="E">Eletrónic</option>
                </select>
            </div>
            <div id="proves" class="mb-3"></div>
            <button type="button" class="btn btn-primary" id="ap">Afegir prova</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>



    </div>


    <?php
    include "foter.php";

    ?>

</body>

<script src="../../js/proves.js"></script>

</html>