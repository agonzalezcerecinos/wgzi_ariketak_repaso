<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>4. Lista de la compra</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="container">
        <a class="back-link" href="index.php">&larr; Volver a los ejercicios</a>
        <section class="exercise">
            <p class="level">Nivel 2 · Manipulación</p>
            <h1>4. Lista de la compra</h1>
            <ol>
                <li>Añade "limón" y "manzana" al final con <code>array_push()</code>.</li>
                <li>Añade "café" al principio con <code>array_unshift()</code>.</li>
                <li>Elimina el último producto con <code>array_pop()</code>.</li>
                <li>Muestra la lista después de cada operación.</li>
            </ol>
        </section>
        <section class="exercise">
            <h2>Tu resultado</h2>
            <?php
            $compra = ["pan", "leche", "arroz"];

            array_push($compra, "limón", "manzana");

            foreach ($compra as $producto) {
                echo $producto . " ";
            }

            echo "<br>";

            array_unshift($compra, "café");

            foreach ($compra as $producto) {
                echo $producto . " ";
            }

            echo "<br>";

            array_pop($compra);


            foreach ($compra as $producto) {
                echo $producto . " ";
            }

            echo "<br>";

            ?>
        </section>
    </main>
</body>

</html>