<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="ariketa2_post.php" method="post" name="formLogin">

        <label for="izenaLogin">Izena:</label>
        <input type="text" name="izenaLogin" id="izenaLogin" placeholder="Zure izena">

        <label for="abizenaLogin">Abizena:</label>
        <input type="text" name="abizenaLogin" id="abizenaLogin" placeholder="Zure abizena">

        <label for="emailLogin">Email</label>
        <input type="email" name="emailLogin" id="emailLogin" placeholder="a@a.com">

        <input type="submit" value="Bidali">
    </form>

</body>

</html>


<!-- 
Sortu formulario bat, izena, abizena eta emaila jasotzen dituena, baina kasu honetan POST metodoa erabili.

Formulario honen deia ariketa2_post.php fitxategiari izango da.

Datuak jasotzerakoan, konprobatuko dugu datuak jaso ditugun ala ez.

Datuak izatekotan, erakutsi datuak pantailan, bestela daturen bat falta dela idatzi.

(isset() eta empty() funtzioak erabili hori konprobatzeko) 
-->