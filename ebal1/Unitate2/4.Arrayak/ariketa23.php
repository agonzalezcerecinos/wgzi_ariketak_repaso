<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 23</title>
</head>

<body>

    <?php

    $peliculas = array(
        "Interstellar",
        "Inception",
        "Titanic",
        "Avatar",
        "Gladiator",
        "The Dark Knight",
        "Jurassic Park",
        "Forrest Gump",
        "Matrix",
        "El Señor de los Anillos"
    );

    sort($peliculas);

    print_r($peliculas);
    ?>


</body>

</html>