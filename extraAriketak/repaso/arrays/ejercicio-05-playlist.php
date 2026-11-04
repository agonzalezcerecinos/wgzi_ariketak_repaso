<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>5. Playlist</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="container">
        <a class="back-link" href="index.php">&larr; Volver a los ejercicios</a>
        <section class="exercise">
            <p class="level">Nivel 2 · Manipulación</p>
            <h1>5. Playlist</h1>
            <ol>
                <li>Ordena los títulos alfabéticamente con <code>sort()</code>.</li>
                <li>Muestra la lista ordenada con <code>print_r()</code>.</li>
                <li>Crea y muestra otro array con los primeros cinco títulos usando <code>array_slice()</code>.</li>
            </ol>
        </section>
        <section class="exercise">
            <h2>Tu resultado</h2>
            <?php
            $canciones = [
                "Luz de invierno",
                "Camino al mar",
                "Nubes de papel",
                "Vuelvo a empezar",
                "La ciudad dormida",
                "Río arriba",
                "Días de verano",
                "Un lugar mejor",
                "Enero azul",
                "Bajo la lluvia",
            ];

            sort($canciones);
            print_r($canciones);

            echo "<br>";

            $canciones2 = array_slice($canciones, 0, 5);
            print_r($canciones2);

            ?>
        </section>
    </main>
</body>

</html>