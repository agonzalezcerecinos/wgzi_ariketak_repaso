<?php

$pageStylesheet = 'edit_book.css';
include __DIR__ . '/../includes/header.php';
require_once __DIR__ . "/../functions/liburuDao.php";
require_once __DIR__ . "/../functions/connection.php";

if (!isset($_SESSION['erabiltzailea'])) {
    header("Location: " . BASE_URL . "index.php");
    exit;
}


$pdo = connectDB();

$id = $_GET["id"] ?? 0;

$liburua = selectLiburua($pdo, $id);


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit-editBook'])) {

    $editIzenburua = trim($_POST['editIzenburua'] ?? "");
    $editAutorea = trim($_POST['editAutorea'] ?? "");
    $editEskuragarri = trim($_POST['editEskuragarri'] ?? "");

    if ($editIzenburua === "" || $editAutorea === "") {
        $error = "Ezin da ezer hutsik utzi.";
    } elseif (updateLiburu($pdo, $id, $editIzenburua, $editAutorea, $editEskuragarri)) {
        header("Location: view_book.php");
        exit;
    }
}

?>

<main>
    <?php if (!$liburua): ?>
        <p>Ez dago liburu hori</p>
        <a href="../index.php">Bueltatu hasieratara</a>
    <?php else: ?>
        <section class="formSection">
            <article>
                <h1>LIBURUAK ALDATU</h1>
                <p><strong>Liburu kodea: </strong><?= $liburua["kodea"] ?></p>

                <form method="post" name="editForm" id="editBookForm">

                    <label for="editIzenburua">Izenburua (4-50 karaktere):</label>
                    <input type="text" name="editIzenburua" id="editIzenburua" value="<?= $liburua["titulua"] ?>">

                    <label for="editAutorea">Autorea:</label>
                    <input type="text" name="editAutorea" id="editAutorea" value="<?= $liburua["autorea"] ?>">

                    <fieldset class="availabilityChoices">
                        <legend>Eskuragarri dago?</legend>
                        <input
                            type="radio"
                            name="editEskuragarri"
                            id="editEskuragarriBai"
                            value="1"
                            <?= $liburua["eskuragarri"] == 1 ? 'checked' : '' ?>>
                        <label for="editEskuragarriBai">Bai</label>

                        <input
                            type="radio"
                            name="editEskuragarri"
                            id="editEskuragarriEz"
                            value="0"
                            <?= $liburua["eskuragarri"] == 0 ? 'checked' : '' ?>>
                        <label for="eskuragarriEz">Ez</label>

                    </fieldset>
                    <div class="formButtons">
                        <input type="submit" value="Bidali" name="submit-editBook" id="botoia">
                        <button type="button" id="botoia2" onclick="window.location.href='view_book.php'">Atzera</button>
                    </div>
                </form>
            </article>
        </section>
    <?php endif ?>
</main>


<?php
include('../includes/footer.php');
?>