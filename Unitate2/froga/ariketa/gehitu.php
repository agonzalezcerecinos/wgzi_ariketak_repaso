<?php

include 'pages/header.php';
require 'functions/funtzioak.php';
require 'data/datuak.php';


echo '
<form action="gehitu.php" method="post">

    <h1>Serie berria gehitu</h1>
    <label for="serieIzena">Izenburua:</label>
    <input type="text" name="serieIzena" id="serieIzena">
    <label for="serieGeneroa">Generoa:</label>
    <select name="serieGeneroa">
        <option value="all">Guztiak</option>
        <option value="Zientzia fikzioa" selected>Zientzia fikzioa</option>
        <option value="Drama">Drama</option>
        <option value="Fantasia">Fantasia</option>
        <option value="Thriller">Thriller</option>
    </select>
    <label for="serieDenboraldi">Denboraldi kopurua:</label>
    <input type="text" name="serieDenboraldi" id="serieDenboraldi">
    <label for="serieBalorazioa">Balorazioa:</label>
    <input type="text" name="serieBalorazioa" id="serieBalorazioa">
    <label for="serieEgoera">Egoera</label>
    <select name="serieEgoera">
        <option value="martxan">Martxan</option>
        <option value="amaituta" selected>Amaituta</option>
    </select>

    <input type="submit" value="Seriea gehitu" name="gehitu">

</form>
 ';

if (!empty($_POST["gehitu"])) {
    $izenburua = $_POST["serieIzena"];
    $generoa = $_POST["serieGeneroa"];
    $denboraldi = $_POST["serieDenboraldi"];
    $balorazioa = $_POST["serieBalorazioa"];
    $egoera = $_POST["serieEgoera"];
    $egoeraBoolean = false;

    if ($egoera == "martxan") {
        $egoeraBoolean = true;
    }


    echo $egoera . $generoa;

    $seriesGehitu = [
        
            "izenburua" => $izenburua,
            "generoa" => $generoa,
            "denboraldiak" => $denboraldi,
            "balorazioa" => $balorazioa,
            "amaituta" => $egoeraBoolean,
            "irudia" => "img/default.jpg"
        
    ];


    array_push($series, $seriesGehitu);
    print_r($series);
    foreach ($series as $serie => $serieDatuak) {
        echo '<article class="seriea">';
        echo '<img src="' . $series[$serie]["irudia"] . '" alt="' . $series[$serie]["izenburua"] . '">';
        echo '<div>';
        echo '<h2> ' . $series[$serie]["izenburua"] . ' </h2>';
        echo '<p>  ' . $series[$serie]["generoa"] . ' </p>';
        echo '<p>  ' . $series[$serie]["denboraldiak"] . " denboraldi" . ' </p>';
        echo '<p>  ' . "Balorazioa: " . $series[$serie]["balorazioa"] . ' </p>';

        if ($series[$serie]["amaituta"] == true) {
            echo '<p>  Martxan </p>';
        } else {
            echo '<p>  Amaituta </p>';
        }

        echo '</div>';
        echo '</article>';
    }
} else {
    echo '<p> Ez duzu ipini ezer </p>';
}





include 'pages/footer.php';
