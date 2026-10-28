<?php
$pageStylesheet = 'view_book.css';
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

$liburuKontadorea = count($liburuak);

?>

<main class="bookListPage">
    <section class="pageHeading">
        <div>
            <h1>Liburuen kontsulta</h1>
        </div>
        <a class="primaryButton" href="add_book.php">Liburu berria sortu</a>
    </section>

<?php if ($liburuKontadorea != 0): ?>
    <section class="bookListPanel">
        <p><strong>Guztira: </strong><?= $liburuKontadorea ?> liburu aurkitu dira</p>
    <div class="tableWrap">
    <table class="bookTable">
        <thead>
            <tr>
                <th>Kodea</th>
                <th>Izenburua</th>
                <th>Autorea</th>
                <th>Eskuragarri?</th>
                <th>Ekintzak</th>
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
                    <td class="tableActions">
                        <a href="edit_book.php?id=<?= $liburua['kodea'] ?>">Aldatu</a>
                        <a href="delete_book.php?id=<?= $liburua['kodea'] ?>">Ezabatu</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
    </section>
<?php else: ?>

    <section class="emptyState">
        <p>Ez dago libururik</p>
        <a href="../index.php">Bueltatu hasieratara</a>
    </section>
<?php endif; ?>
</main>


<?php
include('../includes/footer.php');
?>