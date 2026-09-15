<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 10</title>
</head>

<body>

    <?php

    $izena = "Garazi";
    $abizena1 = "Olabarria";
    $abizena2 = "Iriondo";
    $mezua = "";

    if($izena == "Garazi" || $abizena1 == "Olabarria" && $abizena2 == "Iriondo") {
        $mezua = "Ongi etorri " . $izena . " " . $abizena1 . " " . $abizena2 . "!";
    } else {
        $mezua = "Ez du sarbiderik";
    }
    
    ?>

    <p><?php echo $mezua; ?></p>
</body>

</html>