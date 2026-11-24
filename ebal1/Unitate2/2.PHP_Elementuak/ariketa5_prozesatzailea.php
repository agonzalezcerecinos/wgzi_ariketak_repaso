<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 5</title>
</head>

<body>
    <?php
    const IZENA = "alexander gonzalez";

    $izenaTopUpper = strtoupper(IZENA);

    echo "<p>Letra larriz: $izenaTopUpper </p>";

    $izenaTopUpper = strtolower(IZENA);

    echo "<p>Letra xehez: $izenaTopUpper </p>";

    $izenaLength = strlen(IZENA);

    echo "<p>Izenaren luzeera: $izenaLength </p>";

    $izenaKaraktereakLehen = substr(IZENA, 0, 1);
    $izenaKaraktereakAsken = substr(IZENA, -1);

    echo "<p> Lehen karakterea: $izenaKaraktereakLehen <br> Azken karakterea: $izenaKaraktereakAsken </p>";

    $izenaExplode = explode(" ", IZENA);
    echo "<p> Izena: " . ucfirst($izenaExplode[0]) . " <br> Abizena: " . ucfirst($izenaExplode[1]) . " </p>";

    $izena3Karaktereak = substr(IZENA, 2, 1);
    $izena5Karaktere = substr(IZENA, 4, 1);
    echo "<p> Hirugarren karakterea: $izena3Karaktereak <br> Bostgarren karakterea: $izena5Karaktere </p>";


    ?>
</body>

</html>