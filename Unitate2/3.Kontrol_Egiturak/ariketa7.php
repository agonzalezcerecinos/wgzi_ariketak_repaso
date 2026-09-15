<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 7</title>
</head>

<body>

    <?php
    
    const ADINA = 22;
    
    $mezua = "";
    if (ADINA >= 18){
        $mezua = "Adina: " . ADINA . " urte. Pasa zaitezke.";
    } else {
        $mezua = "Adina: " . ADINA . " urte. Ondino adingabekoa zara, ezin zara pasatu.";
    }
    
    ?>

    <p><?php echo $mezua; ?></p>

</body>

</html>