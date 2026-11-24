<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 20</title>
</head>

<body>

    <?php

    $ikasleak = array(
        "Jone" => 8,
        "Ander" => 9,
        "Mikel" => 7
    );

    $notaBataz = array_sum($ikasleak) / count($ikasleak);

    echo "Ikasle guztien batazbesteko nota: " . $notaBataz . "<br><br>";


    ?>

</body>

</html>

<!-- Sortu array asoziatiboa ikasleen izenekin eta haien notekin
Bistaratu ikasle bakoitzaren izena eta nota
Kalkulatu batez besteko nota (oraingoan zerrendan ikusitako funtzioak erabili) -->