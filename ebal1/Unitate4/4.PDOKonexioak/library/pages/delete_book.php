<?php
$pageStylesheet = 'delete_book.css';
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

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit-deleteBook'])) {

    $deleteId = trim($_POST['idBook'] ?? "");

    deleteLiburu($pdo, $id);
    header("Location: view_book.php");
    exit;
}

?>

<main class="deletePage">
    <?php if (!$liburua): ?>
        <section class="deleteCard">
            <p>Ez dago liburu hori</p>
            <a href="../index.php">Bueltatu hasietara</a>
        </section>
    <?php else: ?>
        <section class="deleteCard">
            <h1>EZABATU LIBURUA</h1>
            <div class="deleteWarning">
                <p><strong>Ziur zaude liburu hau ezabatu nahi duzula?</strong></p>
            </div>
            <div class="bookDetails">
                <p><strong>Kodea: </strong> <?= $id ?></p>
                <p><strong>Izenburua: </strong> <?= $liburua["titulua"] ?></p>
                <p><strong>Autorea: </strong> <?= $liburua["autorea"] ?></p>
                <p><strong>Eskuragarri: </strong>
                    <?php
                    if ($liburua["eskuragarri"] == 0) {
                        echo "Ez";
                    } else {
                        echo "Bai";
                    }
                    ?>
                </p>
            </div>
            <form method="post">
                <input type="hidden" name="idBook" value="<?= $id ?>">
                <div class="formButtons">
                    <input type="submit" value="Bidali" name="submit-deleteBook" id="botoia">
                    <button type="button" id="botoia2" onclick="window.location.href='view_book.php'">Atzera</button>
                </div>
            </form>
        </section>
    <?php endif ?>
</main>
<?php
include('../includes/footer.php');
?>