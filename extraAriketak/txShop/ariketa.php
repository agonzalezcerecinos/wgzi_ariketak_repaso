<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    const DENDA_IZENA = "TxShop Txurdinaga";
    const BEZ_EHUNEKOA = 21;
    const GARRAIO_PREZIOA = 5.99;
    const DOAN_GARRAIO_MUGA = 50;

    $produktu1Izena = "Ordenagailu sagua";
    $produktu1Prezioa = 25.50;
    $produktu1_kantitatea = 2;
    $produktu2_izena = "Teklatua";
    $produktu2_prezioa = 45.00;
    $produktu2_kantitatea = 1;
    $produktu3_izena = "Pantaila kablea";
    $produktu3_prezioa = 15.75;
    $produktu3_kantitatea = 3;

    $produktu1GuztizkoPrezioa = $produktu1Prezioa * $produktu1_kantitatea;
    $produktu2GuztizkoPrezioa = $produktu2Prezioa * $produktu2_kantitatea;
    $produktu3GuztizkoPrezioa = $produktu3Prezioa * $produktu3_kantitatea;

    $azpitotala = $produktu1GuztizkoPrezioa + $produktu2GuztizkoPrezioa + $produktu3GuztizkoPrezioa;
    $bezKantitatea = $azpitotala * BEZ_EHUNEKOA / 100;

    $garraioKostua = $azpitotala > 50 ? 0 : GARRAIO_PREZIOA;
    ?>


</body>

</html>