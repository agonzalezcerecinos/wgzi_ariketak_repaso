<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h1>Ikasleak: </h1>
    <?php

    $ikasleak = array(
        "Jone" => array("abizena" => "Martinez Lopez", "Adina" => 20, "Zikloa" => "AS3"),
        "Ander" => array("abizena" => "Urrutia Ron", "Adina" => 19, "Zikloa" => "DW3"),
        "Mikel" => array("abizena" => "Olarrieta Andion", "Adina" => 20, "Zikloa" => "DW3")
    );

    foreach ($ikasleak as $ikaslea => $ikasleDatuak) {
        echo "<ul>";
        echo "<li>Ikaslearen izena: " . $ikaslea . "</li>";
        echo "<ul>";
        foreach ($ikasleDatuak as $item => $ikasleDatu) {
            echo "<li>" . $item . ": " . $ikasleDatu . "</li>";
        }
        echo "</ul>";

        echo "</ul>";
    }

    ?>
</body>

</html>