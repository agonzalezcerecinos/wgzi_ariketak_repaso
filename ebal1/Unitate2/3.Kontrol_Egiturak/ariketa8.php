<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 8</title>
</head>
<body>
    <?php 
    
    $zenbakia = 5;
    $mezua = "";

    if ($zenbakia <= 10){
        $mezua = "Zenbakia $zenbakia da.";
    }else{
        $mezua = "Zenbakia ez dago 0 eta 10en artean. Zure zenbakia: $zenbakia";
    }

    ?>

    <p><?php echo $mezua; ?></p>
</body>
</html>