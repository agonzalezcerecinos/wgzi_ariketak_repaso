<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>6. Catálogo de productos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="container">
        <a class="back-link" href="index.php">&larr; Volver a los ejercicios</a>
        <section class="exercise">
            <p class="level">Nivel 3 · Multidimensionales</p>
            <h1>6. Catálogo de productos</h1>
            <ol>
                <li>Recorre el catálogo y muestra el nombre, precio y stock de cada producto.</li>
                <li>Calcula el valor de todo el inventario: precio multiplicado por stock para cada producto.</li>
                <li>Muestra el valor total.</li>
            </ol>
        </section>
        <section class="exercise">
            <h2>Tu resultado</h2>
            <?php
            $productos = [
                ["nombre" => "Teclado", "precio" => 24.90, "stock" => 8],
                ["nombre" => "Ratón", "precio" => 15.50, "stock" => 12],
                ["nombre" => "Monitor", "precio" => 159.00, "stock" => 3],
            ];

            foreach ($productos as $key => $value) {
                echo "Producto: " . $key . "<br>";
                foreach ($value as $campo => $dato) {
                    echo "" . $campo . " " . $dato . "<br>";

                }
                echo "<br>";
            }


            $precioTotalStock = 0;
            foreach ($productos as $producto) {
                echo $producto["nombre"] . ": ";
                $precioTotalStock = $producto["precio"] * $producto["stock"];
                echo $precioTotalStock . "€ <br>";
            }

            $precioValorTotal = 0;
            foreach ($productos as $producto) {
                $precioValorTotal += $producto["precio"] * $producto["stock"];
            }
            echo "Total: " . $precioValorTotal . "€";
            ?>
        </section>
    </main>
</body>

</html>