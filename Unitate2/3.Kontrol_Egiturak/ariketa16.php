<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 15</title>
</head>

<body>
    <?php

    $zenbakia = 0;
    const IRABAZLEA = 7;

    for ($i = 0; $i < 4; $i++) {
        $zenbakia = rand(1, 10);

        echo "Aukeratutako zenbakia: $zenbakia da <br>";
        if ($zenbakia == IRABAZLEA) {
            echo "!Zuzena asmatu duzu! <br>";
            break;
        } else {
            echo "Saiakera okerra, berriro saiatzen.... <br>";
        }
    }



    ?>
</body>

</html>