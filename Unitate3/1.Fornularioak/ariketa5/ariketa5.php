<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    if (!isset($_POST["bidali"])) {
        echo ' 
        <form action="ariketa5.php" method="post" name="checkBoxForm">

        <label for="kotxe1">Volkswagen</label>
        <input type="checkbox" name="kotxe[]" id="kotxe1" value="Volkswagen">

        <label for="kotxe2">BMW</label>
        <input type="checkbox" name="kotxe[]" id="kotxe2" value="BMW">

        <label for="kotxe3">Mercedes</label>
        <input type="checkbox" name="kotxe[]" id="kotxe3" value="Mercedes">

        <label for="kotxe4">UAZ</label>
        <input type="checkbox" name="kotxe[]" id="kotxe4" value="UAZ">

        <label for="kotxe5">Opel</label>
        <input type="checkbox" name="kotxe[]" id="kotxe5" value="Opel">

        <label for="kotxe6">Porsche</label>
        <input type="checkbox" name="kotxe[]" id="kotxe6" value="Porsche">

        <input type="submit" value="Bidali" name="bidali">

    </form>';
    } else {

        if (!empty($_POST["kotxe"])) {
            $kotxeak = $_POST["kotxe"];

            print_r($kotxeak);
        }

        echo '<br><a href="ariketa5.php">Itzuli formularioa betezera</a>';
    }


    ?>


</body>

</html>