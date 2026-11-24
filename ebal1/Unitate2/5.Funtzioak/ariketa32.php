<?php

function ikasleaSortu($izena, $adina, $kalifikazioa)
{
    $ikasleak = [
        "izena" => $izena,
        "adina" => $adina,
        "kalifikazioa" => $kalifikazioa
    ];
    ikasleaErakutsi($ikasleak);
}

function ikasleaErakutsi($ikasleak)
{

print_r($ikasleak);
    foreach ($ikasleak as $clave => $valor) {
        echo "$clave: $valor <br>";
    }
}

ikasleaSortu("Alexander", 22, 9);
ikasleaSortu("Oier", 31, 10);
?>

<!-- Programa bat sortu behar duzu, ikasleen eta haien kalifikazioen erregistroa eramateko. 
 Horretarako array asoziatibo bat erabili behar duzu informazio guztia hori gordetzeko.

ikasleaSortu() funtzioa sortuko dugu, hiru parametro onartzen dituen funtzioa: ikaslearen izena, adina eta kalifikazioa adierazten dituena. 
Funtzioak ikaslea erregistrora gehitu eta erregistro eguneratua itzuli behar du.
Sortu ezazu ikaslearen izena eta erregistro osoa erakusten duen funtzioa. Funtzio honek ikaslea erregistroan izatekotan, bere izena, 
adina eta kalifikazioa erakutsi behar ditu, bestela erregistroan ez dagoela idatziko du. ikasleaErakutsi() izena izango du funtzioak.
Funtzio horiek erabiliko dituen programa nagusi bat sortuko duzu, erregistroan gutxienez hiru ikasle sartzeko, eta informazioa erakusteko. -->