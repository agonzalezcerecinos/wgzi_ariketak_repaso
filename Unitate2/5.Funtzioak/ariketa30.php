    <?php

    function ivaKalkulatu($prezioa, $bez = 21)
    {
        return $prezioa * $bez / 100;
    }

    echo ivaKalkulatu(1200);

    ?>

    <!DOCTYPE html>

    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>




    </body>

    </html>

    <!-- 

Produktu baten BEZa kalkulatzeko balio duen funtzio bat egiten du. Bi parametro izango ditu: lehenengoak salneurria, 
eta bigarrenak aplikatu beharreko BEZa. 
Hautazkoa izango da, eta, jasotzen ez bada, %21eko BEZa kalkulatuko da. Froga ezazu funtzioa adibide batekin
-->