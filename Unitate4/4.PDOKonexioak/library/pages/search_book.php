<?php
$pageStylesheet = 'search_book.css';
include __DIR__ . '/../includes/header.php';
require_once __DIR__ . "/../config/config.php";
require_once __DIR__ . "/../functions/liburuDao.php";
require_once __DIR__ . "/../functions/connection.php";

if (!isset($_SESSION['erabiltzailea'])) {
    header("Location: " . BASE_URL . "index.php");
    exit;
}

$pdo = connectDB();

$liburuak = selectLiburuak($pdo);

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['search-submit'])) {

    $izenburua = trim($_POST['searchIzenburua'] ?? "");
    $autorea = trim($_POST['searchAutorea'] ?? "");

    $eskuragarri = isset($_POST['searchEskuragarri'])
        ? (int) $_POST['searchEskuragarri']
        : null;

    $liburuak = bilatuLiburuak($pdo, $izenburua, $autorea, $eskuragarri);
}



$liburuKontadorea = count($liburuak);

?>

<?php
$searchIzenburua = $_POST['searchIzenburua'] ?? "";
$searchAutorea = $_POST['searchAutorea'] ?? "";
$searchEskuragarri = $_POST['searchEskuragarri'] ?? null;
?>

<main class="searchPage">
    <section class="searchPanel">
        <h1>Bilatu liburuak</h1>
        <?php if (isset($_POST['search-submit'])): ?>
            <p class="searchSummary">Bilaketa:
                <?php

                if ($searchEskuragarri === '1') {
                    $searchEskuragarriString = "Bai";
                } else if ($searchEskuragarri === '0') {
                    $searchEskuragarriString = "Ez";
                }else{
                     $searchEskuragarriString = "";
                }


                echo $searchIzenburua . " " . $searchAutorea . " " . $searchEskuragarriString;
                ?>
            </p>
        <?php endif; ?>
        <form method="post" id="searchForm">

            <label for="searchIzenburua">Izenburua:</label>
            <input type="text" name="searchIzenburua" id="searchIzenburua" value="<?= htmlspecialchars($searchIzenburua) ?>">

            <label for="searchAutorea">Autorea:</label>
            <input type="text" name="searchAutorea" id="searchAutorea" value="<?= htmlspecialchars($searchAutorea) ?>">

            <fieldset class="availabilityChoices">
                <legend>Erabilgarri</legend>
                <input
                    type="radio"
                    name="searchEskuragarri"
                    id="searchEskuragarriBai"
                    value="1"
                    <?= $searchEskuragarri === '1' ? 'checked' : '' ?>>
                <label for="searchEskuragarriBai">Bai</label>

                <input
                    type="radio"
                    name="searchEskuragarri"
                    id="searchEskuragarriEz"
                    value="0"
                    <?= $searchEskuragarri === '0' ? 'checked' : '' ?>>
                <label for="searchEskuragarriEz">Ez</label>

            </fieldset>

            <input type="submit" value="Bilatu" name="search-submit">
        </form>
    </section>

    <?php if ($liburuak): ?>
        <section class="searchResults">
            <p><strong>Guztira: </strong><?= $liburuKontadorea ?> liburu aurkitu dira</p>
            <div class="tableWrap">
                <table class="bookTable">
                    <thead>
                        <tr>
                            <th>Kodea</th>
                            <th>Izenburua</th>
                            <th>Autorea</th>
                            <th>Eskuragarri?</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- esto dentro de un foreach -->
                        <?php foreach ($liburuak as $liburua) { ?>
                            <tr>
                                <td><?= $liburua["kodea"] ?></td>
                                <td><?= $liburua["titulua"] ?></td>
                                <td><?= $liburua["autorea"] ?></td>
                                <td>
                                    <?php
                                    if ($liburua["eskuragarri"] == 1) {
                                        echo "Bai";
                                    } else {
                                        echo "Ez";
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </section>
    <?php else: ?>
        <p class="emptyState">Ez dago libururik</p>
    <?php endif; ?>
</main>

<?php
include('../includes/footer.php');
?>