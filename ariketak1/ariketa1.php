<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 1</title>
</head>

<body>

    <?php

    $zbk1 = 10;
    $zbk2 = 15.4;
    $batuera = $zbk1 + $zbk2;

    echo "<p> $zbk1 + $zbk2 = $batuera </p>"; 

    ?>

    <h1> Nire batuketak </h1>
    <p><?php echo $zbk1 . " + " . $zbk2 . " = " . $batuera; ?></p>
    <p><?php echo "$zbk1 + $zbk2 = $batuera"; ?></p>

</body>

</html>