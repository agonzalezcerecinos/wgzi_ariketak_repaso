<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 17</title>
</head>

<body>

    <?php

    $zenbakiak = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $batura = 0;

    for ($i = 0; $i < count ($zenbakiak); $i++){
        $batura = $zenbakiak[$i] + $batura;
    }

    echo "Zenbaki guztien batura: " . $batura;
    
    ?>

</body>

</html>

<!--
Zenbakizko balioak dituen array bat definitu, adibidez, 10 zenbaki dituen arraya.

Egin balio guztien batura eta gorde aldagai batean.
Bistaratu batuketa pantailan. -->