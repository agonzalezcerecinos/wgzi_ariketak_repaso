<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $notak = array("Ander"=>"3.5", "Bego"=>"7", "Jon"=>"6.3");

    foreach($notak as $ikaslea => $ikasleNota){
        echo "Ikaslearen izena: " . $ikaslea . " eta nota: " . $ikasleNota . "<br>";
    }


    /* a la izquierda el identeficativo/clave y a la derecha el valor */
    ?>

</body>

</html>

<!--Hurrengo array kontutan izanda, atara ikasleen nota guztiak banan-banan alde batetik eta gero foreach bategaz, kontutan izan zein motatako arraya den. -->