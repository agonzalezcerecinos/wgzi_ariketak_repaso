<?php

function aldagaiGehitu()
{
    static $zbk = 0;

    $zbk++;

    return $zbk;
}




echo aldagaiGehitu() . " ";
echo aldagaiGehitu() . " ";
echo aldagaiGehitu(). " ";

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
Funtzio bat duen programa bat egiten du, 0 balioarekin hasieratuko duen aldagai estatiko batekin, eta, 
 deitzen den bakoitzean, handituko dugu baten balio hori, funtzioak balioa bueltatuko du.
Behin funtzioa sortuta duzunean, deitu funtzioari 3 aldiz, eta bistaratu itzulitako balioa funtzioari deitzen diogun bakoitzean. 
-->