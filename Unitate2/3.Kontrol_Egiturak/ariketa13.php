<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 13</title>
</head>

<body>

    <?php

    for ($i = 5; $i <= 50; $i++) {
        if ($i % 2 == 0) {
            echo $i;
            if ($i < 50) {
                echo ", ";
            }
        }
    }

    ?>


</body>

</html>

<!-- Sortu programa bat 5 eta 50 bitarteko zenbaki bikoitiak koma batekin bananduta erakutsiko duena. Azken koma ez erakutsi. -->