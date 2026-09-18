<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 27</title>
</head>

<body>


    <?php

    $desio_zerrenda = array("Alemania", "Noruega", "Inglaterra", "Italia", "Japon");

    array_push($desio_zerrenda, "Brasil", "China");

    $bisitatuak_2022 = array('Italia', 'Frantzia');
    $bisitatuak_2023 = array('Portugal', 'Japon');

    $bisitatuak_guztiak = array_merge($bisitatuak_2022, $bisitatuak_2023);

    //print_r($bisitatuak_guztiak);

    $desio_zerrendaClean = array_diff($desio_zerrenda, $bisitatuak_guztiak);

    sort($desio_zerrendaClean);

    print_r($desio_zerrendaClean);

    ?>

</body>

</html>

<!-- 
Zure bidaia-desioen zerrenda Imajinatu bidaia egiteko gogoko dituzun herrialdeen zerrenda bat antolatzen ari zarela, eta zerrenda hori arrayak erabiliz kudeatu behar duzula.

Argibideak:

Sortu $desio_zerrenda izeneko array bat, bidaiatu nahi zenituzkeen bost herrialderekin.
Erabili beharrezko funtzioa bi herrialde gehiago gehitzeko zerrendara.
Orain bi zerrenda gehigarri dituzu, azken bi urteetan bidaiatu dituzun herrialdeekin, adibidez:

$bisitatuak_2022 = array('Italia', 'Frantzia')
$bisitatuak_2023 = array('Portugal', 'Japon')
Bi zerrenda horiek batu array bakarrean $bisitatuak_guztiak.

Ezabatu errepikatzen diren herrialdeak $desio_zerrenda-tik. Hau da, bidaiatu dituzun herrialdeak ezabatu nahi dituzu zure desioen zerrendatik.
Azken desioen zerrenda alfabetikoki ordenatu.
Emaitza pantailaratu.
-->