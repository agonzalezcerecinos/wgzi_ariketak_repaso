<?php

include 'header.php';

$aukerak = array("Harri", "Horri", "Ar");

$makinaZbk = 0;
$jokalariaZbk = 0;

function zbkRandom()
{
    global $makinaZbk;
    global $jokalariaZbk;

    $makinaZbk = rand(0, 2);
    $jokalariaZbk = rand(0, 2);

/*     echo "makina zbk: $makinaZbk ";
    echo "jokalari zbk: $jokalariaZbk "; */
}

function irabazleaAukeratu($makina, $jokalaria)
{
    if ($makina == $jokalaria) {
        return "Berdinketa";
    }

    if (
        ($jokalaria == 0 && $makina == 2) ||
        ($jokalaria == 1 && $makina == 0) ||
        ($jokalaria == 2 && $makina == 1)
    ) {
        return "Jokalaria";
    }

    return "Makina";
}

$jokalariaPuntuak = 0;
$makinaPuntuak = 0;


for ($i = 0; $i < 3; $i++) {
    zbkRandom();

    echo "<p>";
    echo "Jokalaria: " . $aukerak[$jokalariaZbk] . "<br>";
    echo "Makina: " . $aukerak[$makinaZbk] . "<br>";

    $irabazlea = irabazleaAukeratu($makinaZbk, $jokalariaZbk);

    echo "Irabazlea: " . $irabazlea;
    echo "</p>";

    if ($irabazlea == "Jokalaria") {
        $jokalariaPuntuak++;
    } elseif ($irabazlea == "Makina") {
        $makinaPuntuak++;
    }
}

if ($jokalariaPuntuak > $makinaPuntuak) {
    echo "<h3>Jokalariak irabazi du!</h3>";
} elseif ($makinaPuntuak > $jokalariaPuntuak) {
    echo "<h3> makinak irabazi du!</h3>";
} else {
    echo "<h3>Berdinketa!</h3>";
}


include 'footer.php';

?>

<!-- Harri, Horri, Ar" jolasa programatuko dugu. Lehenengo eta behin, array bat sortuko dugu 3 aukerekin: 0 - Harri, 1 - Horri, 2 - Ar.

Alde batetik, programak hautazko aukera bat egingo du (random batekin) eta jokalariarentzat beste aldagai bat sortuko dugu, 
eta hautaz ere aukeratuko da.
Funtzio bat sortuko dugu konparaketa egiteko jokalari eta makinaren aukeren artean.
3 biderretan irabazten duenak, jolasa irabaziko du.
Konparaketa egiteko funtzio bat sortuko dugu: irabazleaAukeratu()


include() erabili goiko partea (irudia barne) egiteko eta footerra egiteko ere (autorea…) -->