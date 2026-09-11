<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 4</title>
</head>

<body>

    <?php

    const UNIBERTSITATEA = "Euskal Herriko Unibertsitatea";
    define("GRADU_KREDITOAK", 240);
    const IKASTAROA_PREZIOA = 1250.75;

    $ikasleIzena = "Alexander";
    $orainArteKreditoak = 45;
    $batezBestekoNota = 7.8;
    $ikastaroBukatua = false;

    $faltaKredituak = GRADU_KREDITOAK - $orainArteKreditoak;

    echo "<h2>Ikaslearen informazioa</h2>
    <p>Ikaslearen izena: $ikasleIzena</p>
    <p>Unibertsitatea: ". UNIBERTSITATEA . "</p>
    <p>Orain arteko kreditoak: $orainArteKreditoak / " . GRADU_KREDITOAK . "</p>
    <p>Batez besteko nota: $batezBestekoNota</p>
    <p>Falta diren kreditoak: $faltaKredituak </p>
    <p>Ikastaroa bukatuta: " . ($ikastaroBukatua ? 'BAI' : 'EZ') . "</p>
    <p>Ordaindu beharreko prezioa: " . IKASTAROA_PREZIOA . "</p>";

    ?>


</body>

</html>

<!-- 
    
Sortu hurrengo konstanteak const edo define() erabiliz:

UNIBERTSITATEA → "Euskal Herriko Unibertsitatea"
GRADU_KREDITOAK → 240
IKASTAROA_PREZIOA → 1250.75
Sortu aldagai hauek:

$ikasle_izena → zure izena
$orain_arte_kreditoak → 45 (integer)
$batez_besteko_nota → 7.8 (float)
$ikastaro_bukatua → false (boolean)
Erakutsi pantailan informazio hau HTML formatuan:

html <h2>Ikaslearen informazioa</h2> <p>Ikaslearen izena: [IKASLE_IZENA]</p> <p>Unibertsitatea: [UNIBERTSITATEA]</p> <p>Orain arteko kreditoak: [ORAIN_ARKTE_KREDITOAK] / [GRADU_KREDITOAK]</p> <p>Batez besteko nota: [BATEZ_BESTEKO_NOTA]</p> <p>Ikastaroa bukatuta: [BAI/EZ]</p> <p>Ordaindu beharreko prezioa: [IKASTAROA_PREZIOA]€</p>
 -->