<!DOCTYPE html>
<html lang="eu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 21</title>
</head>

<body>


    <?php

    $ikasleak = ["Ane", "Jon", "Mikel", "June", "Unai", "Maialen"];

    echo "Ikasle guztien kopurua: " . count($ikasleak) . "<br><br>";
    echo "Ikaslearen izenak: <br>";
    foreach ($ikasleak as $index => $ikasleDatuak) {
        echo "<ul>";
        echo "<li> $ikasleDatuak </li>";
        echo "</ul>";
    }

    $mikelDago = false;
    $noraDago = false;

    for ($i = 0; $i < count($ikasleak); $i++) {

        if ($ikasleak[$i] == "Mikel") {
            $mikelDago = true;
        }
        if ($ikasleak[$i] == "Nora") {
            $noraDago = true;
        }
    }

    if ($mikelDago) {
        echo "Mikel zerrendan dago! <br><br>";
    } else {
        echo "Mikel ez da klasera etorri!<br><br>";
    }

    if ($noraDago) {
        echo "Nora zerrendan dago!<br><br>";
    } else {
        echo "Nora ez da klasera etorri!<br><br>";
    }

    ?>


</body>

</html>

<!-- kasgelara etorri diren ikasleen izenak array batean gordeta ditugu:

php $ikasleak = ["Ane", "Jon", "Mikel", "June", "Unai", "Maialen"];

Sortu PHP script bat honako funtzionalitateekin:

Erakutsi zenbat ikasle etorri diren klasera. Horretarako, ikusitako funtzioren baten bat erabili.
Erakutsi ikasle guztien izenak foreach erabiliz.
Mikel zerrendan badago, erakutsi: "Mikel klasera etorri da."
Egiaztatu "Mikel" zerrendan dagoen.

Bestela: "Mikel ez da klasera etorri."

Egin gauza bera "Nora" izenarekin. -->