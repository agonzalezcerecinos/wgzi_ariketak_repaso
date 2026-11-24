
<?php
session_start(); 

include 'pages/header.php';
require 'functions/funtzioak.php';
require 'data/datuak.php';


echo '
    <form action="bilatu.php" method="post">

    <h1>Serieak bilatu</h1>
    <label for="serieBilatu">Seriearen izenburua</label>
    <input type="text" name="serieBilatu" id="serieBilatu">
    <input type="submit" value="Bilatu" name="Bilatu">

    </form>
 ';

if (!empty($_POST["serieBilatu"])) {
    $seria_bilatu = $_POST["serieBilatu"];

    $serieBilatuta = [];

    foreach ($series as $serie => $serieDatuak) {

        if ($series[$serie]["izenburua"] == $seria_bilatu) {
            $serieBilatuta = $series[$serie];
        }
    }

    if ($serieBilatuta != null) {
        echo '<article class="seriea">';
        echo '<img src="' . $serieBilatuta["irudia"] . '" alt="' . $serieBilatuta["izenburua"] . '">';
        echo '<div>';
        echo '<h2> ' . $serieBilatuta["izenburua"] . ' </h2>';
        echo '<p>  ' . $serieBilatuta["generoa"] . ' </p>';
        echo '<p>  ' . $serieBilatuta["denboraldiak"] . " denboraldi" . ' </p>';
        echo '<p>  ' . "Balorazioa: " . $serieBilatuta["balorazioa"] . ' </p>';

        if ($serieBilatuta["amaituta"] == true) {
            echo '<p>  Martxan </p>';
        } else {
            echo '<p>  Amaituta </p>';
        }

        echo '</div>';
        echo '</article>';
    }
} else {
    echo '<p> Ez da seriea aurkitu </p>';
}

include 'pages/footer.php';

?>

