<?php
include __DIR__ . '/../includes/header.php';
require_once __DIR__ . "/../config/config.php";

// connection.php inportatu require_once erabiliz
require_once __DIR__ . "/DAO/connection.php";
require_once __DIR__ . "/DAO/liburuDao.php";


$dbName = 'db_liburutegia';
$pdo = connectDB($dbName);

if (!isset($_SESSION['erabiltzailea'])) {
    header("Location: " . BASE_URL . "index.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $izenburua = trim($_POST['addIzenburua'] ?? "");
    $egilea = trim($_POST['addEgilea'] ?? "");
    $eskuragarri = isset($_POST['eskuragarri']) ? (int)$_POST['eskuragarri'] : 0;

    new Liburu($izenburua, $egilea, $eskuragarri);

    if ($izenburua === "" || $egilea === "") {
        $error = "Ezin da ezer hutsik utzi.";
    } elseif (insertLiburu($pdo, $erabiltzailea, $pasahitza)) {

        $_SESSION['erabiltzailea'] = htmlspecialchars($erabiltzailea);

        header("Location: index.php");
        exit;
    } else {
        $error = "Erabiltzailea edo pasahitza txarto daude.";
    }
}

?>

<main>
    <section class="formSection">
        <article>
            <h1>Liburu Berria Sortu</h1>
            <form action="index.php" method="post" id="loginForm">

                <label for="addIzenburua">Izenburua (4-50 karaktere):</label>
                <input type="text" name="addIzenburua" id="addIzenburua">

                <label for="addEgilea">Autorea:</label>
                <input type="text" name="addEgilea" id="addEgilea">

                <label for="addEskuragarri">Eskuragarri dago?

                    <input type="radio" name="eskuragarri" id="eskuragarriBai" value="1">
                    <label for="eskuragarriBai">Bai</label>

                    <input type="radio" name="eskuragarri" id="eskuragarriEz" value="0" checked>
                    <label for="eskuragarriEz">Ez</label>

                </label>


                <input type="submit" value="Bidali" name="gehitu" id="botoia">

            </form>
            <?php

            // if ($error !== "") {
            //     echo '<p class="errorForm">' . $error . '</p>';
            // }

            ?>

        </article>
    </section>

</main>

<?php
include('../includes/footer.php');
?>