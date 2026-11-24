<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Dom\Document;

$pageStylesheet = 'add_book.css';
include __DIR__ . '/../includes/header.php';
require_once __DIR__ . "/../config/config.php";

// connection.php inportatu require_once erabiliz
require_once __DIR__ . "/../functions/connection.php";
require_once __DIR__ . "/../functions/liburuDao.php";



// $dbName = 'db_liburutegia';
$dbName = 'db_liburutegiak';
$pdo = connectDB();
$msg = "";



if (!isset($_SESSION['erabiltzailea'])) {
    header("Location: " . BASE_URL . "index.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $izenburua = trim($_POST['addIzenburua'] ?? "");
    $egilea = trim($_POST['addEgilea'] ?? "");
    $eskuragarri = isset($_POST['eskuragarri']) ? (int)$_POST['eskuragarri'] : 0;

    if ($izenburua === "" || $egilea === "") {
        $error = "Ezin da ezer hutsik utzi.";
    } else {
        try {
            insertLiburu($pdo, $izenburua, $egilea, $eskuragarri);
            $msg = "Liburu hau: " . $izenburua . " gehitu da";
        } catch (Exception $e) {
            $msg = "Ez da gehitu liburua";
        }
    }
}

?>

<main>

    <section class="formSection">
        <article>
            <h1>Liburu Berria Sortu</h1>
            <form action="add_book.php" method="post" id="addBookForm">
                <div class="msgDiv"><?= $msg ?></div>
                <label for="addIzenburua">Izenburua (4-50 karaktere):</label>
                <input type="text" name="addIzenburua" id="addIzenburua">

                <label for="addEgilea">Autorea:</label>
                <input type="text" name="addEgilea" id="addEgilea">

                <fieldset class="availabilityChoices">
                    <legend>Eskuragarri dago?</legend>
                    <input type="radio" name="eskuragarri" id="eskuragarriBai" value="1">
                    <label for="eskuragarriBai">Bai</label>
                    <input type="radio" name="eskuragarri" id="eskuragarriEz" value="0" checked>
                    <label for="eskuragarriEz">Ez</label>
                </fieldset>
                <div class="formButtons">
                    <input type="submit" value="Bidali" name="gehitu" id="botoia">
                    <button type="button" id="botoia2" onclick="window.location.href='../index.php'">Atzera</button>
                </div>
            </form>
        </article>
    </section>

</main>

<?php
include('../includes/footer.php');
?>