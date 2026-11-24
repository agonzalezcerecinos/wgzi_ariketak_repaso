<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>3. Control de asistencia</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="container">
        <a class="back-link" href="index.php">&larr; Volver a los ejercicios</a>
        <section class="exercise">
            <p class="level">Nivel 1 · Fundamentos</p>
            <h1>3. Control de asistencia</h1>
            <ol>
                <li>Muestra cuántas personas han venido a clase.</li>
                <li>Imprime todos los nombres con <code>foreach</code>.</li>
                <li>Comprueba con <code>in_array()</code> si Mikel y Nora están en la lista e indica el resultado.</li>
            </ol>
        </section>
        <section class="exercise">
            <h2>Tu resultado</h2>
            <?php
            $asistentes = ["Ane", "Jon", "Mikel", "June", "Unai"];

            // TODO: Cuenta, muestra y comprueba los nombres indicados.
            $asistenciaClase = count($asistentes);



            ?>
            <p>A clase han venido: <?= $asistenciaClase ?> personas</p>
            <p>Estos son todos los que han asistido a clase: </p>
            <?php foreach ($asistentes as $alumnos) {
                echo $alumnos . "<br>";
            } ?>
            <p>Están Mikel y Nora en la lista?</p>
            <?php
            if (in_array("Mikel", $asistentes)) {
                echo "Está Mikel <br>";
            } else {
                echo "Mikel no está <br>";
            }

            if (in_array("Nora", $asistentes)) {
                echo "Está Nora <br>";
            } else {
                echo "Nora no está <br>";
            }

            ?>

        </section>
    </main>
</body>

</html>