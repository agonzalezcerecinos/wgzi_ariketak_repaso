<?php


$ikasleak = array();

function ikasleaSortu($izena, $adina, $kalifikazioak)
{
    global $ikasleak;

    $ikasleak[$izena] = array(
        "adina" => $adina,
        "kalifikazioak" => $kalifikazioak
    );
}


function ikasleaErakutsi($ikasleak)
{


    foreach ($ikasleak as $ikaslea => $ikasleDatuak) {
        echo "$ikaslea: <br>";

        foreach ($ikasleDatuak as $i => $datua) {
            echo "$i: $datua <br>";
            foreach ($datua as $i => $notak) {
                echo "$i: $notak <br>";
            }
        }
    }
}

function batazbesteko($kalifikazioa)
{

    $batuketa = array_sum($kalifikazioa);
    $kopurua = count($kalifikazioa);
    $promedioa = $batuketa / $kopurua;
    $promedioa = round($promedioa, 2);

    return $promedioa;
}

function ikasleKalifikazioBataz($izena)
{
    global $ikasleak;

    if (array_key_exists($izena, $ikasleak)) {
        $ikaslea = $ikasleak[$izena];
        $promedioa = batazbesteko($ikaslea["kalifikazioak"]);
        
        echo "Ikaslearen izena: $izena <br>";
        echo "Ikaslearen adina: " . $ikaslea["adina"] . "<br>";

        echo "Batazbestekoa: $promedioa <br>";
    } else {
        echo "<br>$izena ikaslea ez dago erregistroan.<br>";
    }
}

ikasleaSortu("Alexander", 22, [10, 8, 6, 5, 7, 7]);
ikasleaSortu("Oier", 31, [10, 6, 7, 8, 10, 5]);
ikasleaSortu("Claudia", 19, [10, 8, 6, 5, 7, 7]);

echo "<br><br>";

ikasleKalifikazioBataz("Alexander");
echo "<br><br>";

?>

<!-- 

Aurreko ariketari buelta bat emango diogu…

Oraingo honetan, ikasleen kalifikazioak bat bakarra izan beharrean, 6 izango dira, modulu guztien kalifikazioak. Beraz, arraya aldatu beharko da, multidimesionala bihurtzen.

Eta bestetik, funtzio berri bat sortu behar duzu, batazbestekoa() izenarekin, non ikasle baten erregistroa onartu eta kalifikazioen batez bestekoa kalkulatzen duen. Funtzioak kalkulatutako batezbestekoa itzuli behar du.

-->