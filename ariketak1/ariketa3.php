<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa3</title>
</head>

<body>
    <?php

    $zbk1 = 10;
    $zbk2 = 5;

    $batuketa = $zbk1 + $zbk2;
    $kenketa = $zbk1 - $zbk2;
    $biderketa = $zbk1 * $zbk2;
    $zatiketa = $zbk1 / $zbk2;

    echo "<p> Lehenengo zenbakia = $zbk1 <br> Bigarren zenbakia = $zbk2 <br><br> Batuketa = $batuketa <br> Kenketa = $kenketa <br> Biderketa = $biderketa <br> Zatiketa = $zatiketa </p>";
    ?>


    <?php
        $a = 5;
        $b = ++$a;
        print "a aldagaiaren balioa da $a eta b aldagaiarena $b <br>" ;

        $a = 5;
        $b = $a++;
        print "a aldagaiaren balioa da $a eta b aldagaiarena $b <br>" ;
    ?>

</body>

</html>