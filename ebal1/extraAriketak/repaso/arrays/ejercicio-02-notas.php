<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>2. Notas del alumnado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="container">
        <a class="back-link" href="index.php">&larr; Volver a los ejercicios</a>
        <section class="exercise">
            <p class="level">Nivel 1 · Fundamentos</p>
            <h1>2. Notas del alumnado</h1>
            <ol>
                <li>Recorre el array asociativo y muestra el nombre y la nota de cada estudiante.</li>
                <li>Calcula y muestra la nota media.</li>
                <li>Cuenta cuántos estudiantes han aprobado (nota igual o superior a 5).</li>
            </ol>
        </section>
        <section class="exercise">
            <h2>Tu resultado</h2>
            <?php
            $notas = [
                "Ane" => 8,
                "Jon" => 4.5,
                "Mikel" => 6.5,
                "June" => 9,
            ];

            $batuketaNotak = 0;
            $notaKant = count($notas);
            $gaindituNotak = 0;

            echo "<p> Estos son los estudiantes con sus notas </p>";
            foreach ($notas as $notaKey => $notaValue) {
                echo "El/La estudiante " . $notaKey . " ha sacado un " . $notaValue . "<br>";
                $batuketaNotak += $notaValue;
                if ($notaValue >= 5) {
                    $gaindituNotak++;
                }
            }

            $batazNota = $batuketaNotak / $notaKant;

            echo "La media de los estudiantes es: " . $batazNota . "<br>";

            echo "Han aprobado " . $gaindituNotak . " personas" . "<br>";

            ?>
        </section>
    </main>
</body>

</html>