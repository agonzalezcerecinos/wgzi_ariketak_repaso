<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 22</title>
</head>

<body>
    <?php

    $frutak = array("laranja", "platanoa");

    array_push($frutak,"limoia", "sagarra");


    for ($i= 0;$i<count($frutak);$i++) {    
    echo $frutak[$i] . " ";
    }

    ?>
</body>

</html>