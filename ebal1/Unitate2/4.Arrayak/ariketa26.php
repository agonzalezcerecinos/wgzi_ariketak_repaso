<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 26</title>
</head>

<body>

    <?php

    $zenbakia = 0;
    $zenbakiak = array();
    $errepikatuta = false;
    const IRABAZLEA = 7;

    for ($i = 0; $i < 5; $i++) {
        $zenbakia = rand(1, 10);
        $errepikatuta = false;


        for ($j = 0; $j < count($zenbakiak); $j++) {
            if ($zenbakia == $zenbakiak[$j]) {
                $errepikatuta = true;
                echo "Zenbakia errepikatuta " . $zenbakia . "<br><br>";
                break;
            } else {
                $errepikatuta = false;
            }
        }

        if ($errepikatuta) {
            echo "este intento no cuenta " . $i + 1 . "<br><br>";
            $i--;
        }

        array_push($zenbakiak, $zenbakia);

        echo "Aukeratutako zenbakia: $zenbakia da <br>";
        if ($zenbakia == IRABAZLEA) {
            echo "!Zuzena asmatu duzu! " . $i + 1 . " saiakerak egin dituzu! <br>";
            break;
        } else {
            echo "Saiakera okerra, berriro saiatzen.... <br>";
        }
    }



    ?>

</body>

</html>