<html>

<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>

</head>

<?php


$comp = new CompCon();
$res=$comp-> getcompid($id);


//print_r($res); 

$p=new provesuscon();
    


$inscripcions=$p->getinscr($id);


?>

<body>

<h1> Competicio: <?= $res["nom"]?></h1>
<h2> lloc: <?= $res["lloc"] ?>  <?=$res["piscina"]. "  " . $res["crono"] ?> </h2> 
<h2> data: <?= $res["datai"]?></h2>




<table>
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
</div>
</body>

</html>