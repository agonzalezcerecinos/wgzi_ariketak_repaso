<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>1. Suma y estadísticas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="container">
        <a class="back-link" href="index.php">&larr; Volver a los ejercicios</a>
        <section class="exercise">
            <p class="level">Nivel 1 · Fundamentos</p>
            <h1>1. Suma y estadísticas</h1>
            <p>Con el array de números de abajo:</p>
            <ol>
                <li>Calcula la suma recorriendo el array con un bucle.</li>
                <li>Calcula la media.</li>
                <li>Muestra cuántos números hay.</li>
            </ol>
            <p class="starter-data"><code>[4, 9, 2, 15, 6, 3]</code></p>
        </section>
        <section class="exercise">
            <h2>Tu resultado</h2>
            <?php
            $numeros = [4, 9, 2, 15, 6, 3];

            $sumaTotal = 0;
            $media = 0;
            $cuantosHay = count($numeros);

            foreach ($numeros as $numero) {
                $sumaTotal += $numero;
            }

            $media = $sumaTotal / $cuantosHay;

            ?>
            <p>La suma total de todos los numeros del array es: <?= $sumaTotal ?></p>
            <p>La media de todos los numeros del array es: <?= $media ?></p>
            <p>La cantidad de todos los numeros del array es: <?= $cuantosHay ?></p>
        </section>
    </main>
</body>

</html>