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
    include "../includes/tecniclo.php";
    include "../includes/compin.php";
    ?>

    <div class="content">

        <h1> plantilla</h1>


        <div class="container-fluid">

            <table>
                <tr>
                    <th>id</th>
                    <th>nom</th>
                    <th>lloc</th>
                    <th>data inici</th>
                    <th>data fi</th>
                    <th>piscina</th>
                    <th>crono</th>
                </tr>
                <?php
                foreach ($comp as $competi) {

                    ?>
                    <tr>
                        <td><?= $competi["id"] ?></td>
                        <td><?= $competi["nom"] ?></td>
                        <td><?= $competi["lloc"] ?></td>
                        <td><?= $competi["datai"] ?></td>
                        <td><?= $competi["dataf"] ?></td>
                        <td><?= $competi["piscina"] ?></td>
                        <td><?= $competi["crono"] ?></td>
                        <td><a href="veunedin.php?id=<?= $competi["id"] ?>">veure nedadors inscrits</a> </td>
                    </tr>

                    <?php
                }
                ?>
            </table>
        </div>


    </div>




    <?php
    include "foter.php";

    ?>

</body>

</html>