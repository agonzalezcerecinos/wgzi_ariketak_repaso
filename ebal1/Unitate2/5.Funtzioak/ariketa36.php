<?php
function potentziak($i, $j)
{
    return pow($i, $j);
}

function taulaSortu()
{
    for ($i = 1; $i <= 4; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 4; $j++) {
            echo "<td> " . potentziak($i, $j) . "</td>";
        }
        echo "</tr>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <table border=1 style="margin: auto; text-align: center;">
        <?php

        taulaSortu();
        
        ?>

    </table>

</body>

</html>


<!-- Erakutsi 4 bider 4ko taula bat, lehenengo 4 elementuen berreketak (php-ko pow() funtzioa erabili dezakezue)
  erakutsi (kalkuluak egiteko, behar dituen funtzioak sortu). -->