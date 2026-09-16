<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 24</title>
</head>

<body>

    <?php

    $paises = array("alemania", "brasil", "italia", "txile", "uruguay", "australia");

    unset($paises[0], $paises[2], $paises[5]);

    array_push($paises, "argentina", "bolivia");

    sort($paises);

    print_r($paises);




    ?>

</body>

</html>