<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>7. Registro de notas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="container">
        <a class="back-link" href="index.php">&larr; Volver a los ejercicios</a>
        <section class="exercise">
            <p class="level">Nivel 3 · Reto</p>
            <h1>7. Registro de notas</h1>
            <ol>
                <li>Calcula y muestra la media de cada estudiante.</li>
                <li>Encuentra y muestra el nombre del estudiante con la media más alta y su nota media.</li>
            </ol>
        </section>
        <section class="exercise">
            <h2>Tu resultado</h2>
            <?php
            $estudiantes = [
                [
                    "nombre" => "Ane",
                    "notas" => [8, 7.5, 9],
                ],
                [
                    "nombre" => "Jon",
                    "notas" => [6, 8, 7],
                ],
                [
                    "nombre" => "Mikel",
                    "notas" => [9, 9.5, 8.5],
                ],
            ];

            $mediaNotas = 0;
            $estudianteNombre = "";

            foreach ($estudiantes as $key => $value) {
                echo $value["nombre"] ;
                $countNotas = count($value["notas"]);
                $sumaTotal = 0;

                foreach ($value["notas"] as $nota) {
                    $sumaTotal += $nota;
                }

                $media = $sumaTotal / $countNotas;

                echo " Media: " . $media . " <br>";

                if($media > $mediaNotas) {
                    $mediaNotas = $media;
                    $estudianteNombre = $value["nombre"];
                }

            }

            echo "El estudiante con mas media es: ";

            echo $estudianteNombre . " Con su media: " . $mediaNotas; 



            ?>
        </section>
    </main>
</body>

</html>