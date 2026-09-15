<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 15</title>
</head>

<body>

    <?php

    $kontagailua = 1;

    do {
        echo "$kontagailua";

        if ($kontagailua < 10) {
            echo " - ";
        }

        $kontagailua++;
    } while ($kontagailua <= 10);

    ?>


</body>

</html>