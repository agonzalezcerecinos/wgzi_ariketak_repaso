<?php

include 'header.php';

$zenbakia = rand(0, 5);

switch ($zenbakia) {

    case 0:
        echo "Ez du sarbiderik";
        $zenbakia = rand(0, 3);
        break;

    case 1:
        echo "Ongi etorri, egun on bat pasa!";
        break;

    case 2:
        taulaBiderketa();
        break;

    case 3:
        erakutsiIrudiak();
        break;

    default:
        echo "Zenbakia ez dago 0 eta 3 artean";
}


function taulaBiderketa()
{
    $zenbakia = rand(1, 10);

    for ($i = 1; $i <= 10; $i++) {
        echo "$zenbakia x $i = " . ($zenbakia * $i) . "<br>";
    }
}


function erakutsiIrudiak()
{
    echo "<table>";
    echo "<tr>";

    echo "<td><img src='img/img1.jpg' width='150px' height='150px'></td>";
    echo "<td><img src='img/img2.jpg' width='150px' height='150px'></td>";
    echo "<td><img src='img/img3.png' width='150px' height='150px'></td>";
    echo "<td><img src='img/img4.png' width='150px' height='150px'></td>";

    echo "</tr>";
    echo "</table>";
}

include 'footer.php';

?>