<?php

use Dom\Document;

session_start();

include 'pages/header.php';
require 'functions/funtzioak.php';
require 'data/datuak.php';


echo '
<form action="login.php" method="post">

    <h1>Saioa hasi</h1>
    <label for="sessionErabiltzailea">Erabiltzailea:</label>
    <input type="text" name="sessionErabiltzailea" id="sessionErabiltzailea">
    <label for="sessionPasahitza">Pasahitza:</label>
    <input type="password" name="sessionPasahitza" id="sessionPasahitza">

    <input type="submit" value="Seriea gehitu" name="gehitu">

</form>
 ';

if (!empty($_POST['sessionErabiltzailea']) && !empty($_POST['sessionPasahitza'])) {
    $erabiltzailea = $_POST['sessionErabiltzailea'];
    $pasahitza = $_POST['sessionPasahitza'];

    if ($erabiltzailea == 'alex' && $pasahitza == '1234') {
        $_SESSION['erabiltzailea'] = htmlspecialchars($erabiltzailea);
        $_SESSION['pasahitza'] = htmlspecialchars($pasahitza);
        header("Location:index.php");
    } else {
        echo '<script>alert("Erabilzailea edo pasahitza txarto daude.");</script>';
    }
} else {
    echo '<script>alert("Ezin ahal da ezer hutsik geratu. ");</script>';
}


include 'pages/footer.php';
