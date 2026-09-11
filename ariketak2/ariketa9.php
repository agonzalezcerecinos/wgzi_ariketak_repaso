<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 9</title>
</head>

<body>

    <?php

    $aldagaia = 2;
/* 
    if ($aldagaia == 1) {
        echo '$aldagaia berdin 1.';
    } else if ($aldagaia == 2) {
        echo '$aldagaia berdin 2.';
    } elseif ($aldagaia == 3) {
        echo '$aldagaia berdin 3.';
    } else {
        echo '$aldagaia ez da ez 1, ez 2 ezta 3.';
    } */

    switch ($aldagaia) {
        case 1:
            echo '$aldagaia berdin 1.';
            break;
        case 2:
            echo '$aldagaia berdin 2.';
            break;
        case 3:
            echo '$aldagaia berdin 3.';
            break;
        default:
            echo '$aldagaia ez da ez 1, ez 2 ezta 3.';
    }
    
    ?>

</body>

</html>