<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Alta formulario</h1>
    <?php

    if (!isset($_POST["Bidali"])) {
        echo '
                <form action="ariketa3.php" method="post" name="formLogin">

                    <label for="erabiltzaileLogin">Erabiltzailea:</label>
                    <input type="text" name="erabiltzaileLogin" id="erabiltzaileLogin" placeholder="Zure erabiltzailea">

                    <label for="pasahitzaLogin">Pasahitza</label>
                    <input type="password" name="pasahitzaLogin" id="pasahitzaLogin">

                    <input type="submit" value="Bidali" name="Bidali">
                </form>
            ';

            $erabiltzailea = "";
            $pasahitza = "";

            if(!empty()){

            }
            
    }else{
        echo 'Errorea: Erabiltzailea eta pasahitza datuak sartu behar dira. <br><br> <a href="ariketa3.php">Itzuli formularioa betezera</a>';
    }

    ?>



</body>

</html>

<!-- Alta formulario bat sortu, erabiltzailea eta pasahitza eskatzen dituen formularioa, POST metodoarekin.

Fitxategi bakar baten egin behar da, beraz, lehenengo aldian formularioa erakutsi, baina datuak bidali izatekotan, 
konprobatu datu biak sartu dituen ala ez.

Biak sartu ezkero Ongi Etorria emango diogu, bestela datu biak behar ditugula esango diogu: -->