<?php

$izena = "";
$abizena = "";
$mail = "";

$fallos = [];


if (isset($_POST["izenaLogin"])) {
    $izena =  $_POST["izenaLogin"];
}

if (isset($_POST["abizenaLogin"])) {
    $abizena =  $_POST["abizenaLogin"];
}

if (isset($_POST["emailLogin"])) {
    $mail =  $_POST["emailLogin"];
}

if (empty($izena)) {
    $fallos[] = "Izena";
    echo "Izena faltatzen da.";
}

if (empty($abizena)) {
    $fallos[] = "Abizena";
}

if (empty($mail)) {
    $fallos[] = "Email";
}

if (count($fallos) == 1) {
    echo $fallos[0] . " falta da.";
} else {
    echo implode(', ', $fallos) . " faltatzen dira";
}   

