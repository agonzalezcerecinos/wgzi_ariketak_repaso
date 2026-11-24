<?php
include("includes/header.php");
include("functions/db/connection.php");
include("functions/jarduerakFunctions.php");
include("functions/elkarteakFunctions.php");

$pdo = connectDB();

$associations = associationSelect($pdo);



$addErrorea = "";


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['add-submit'])) {

    $jardueraIzenburua = trim($_POST['jardueraIzenburua'] ?? "");
    $jardueraData = trim($_POST['jardueraData'] ?? "");
    $jardueraKopurua = trim($_POST['jardueraKopurua'] ?? 0);
    $jardueraElkartea = trim($_POST['jardueraElkartea'] ?? 0);
    $jardueraIrudia = trim($_FILES['jardueraIrudia'] ?? "");



    $baimentutako_motak = ['jpg', 'png'];
    $fitxategi_luzapena = "";

    if ($jardueraIrudia != null) {
        $fitxategi_luzapena = strtolower(pathinfo($jardueraIrudia['name'], PATHINFO_EXTENSION));
        if (!in_array($fitxategi_luzapena, $baimentutako_motak)) {
            $addErrorea = "Errorea: Fitxategi mota ez da baimendua";
            exit;
        }
    }

    if (mb_strlen($jardueraIzenburua, 'UTF-8') > 30 || empty($jardueraIzenburua)) {
        $addErrorea = "Izenburua 30 karaktere baino gutxiago izan behar ditu eta derrigorrezkoa da.";
    } elseif ($jardueraKopurua <= 0 || empty($jardueraKopurua)) {
        $addErrorea = "Kopurua zenbaki bat izan behar da eta zerotik gorako zenbakia.";
    } else {
        // 4. Izen segurua sortu (hasierako izena ez erabili!) - Hau adibide bat  (uniqid('fitx_') Izen bakarra sortzen du prefixo batekin:))

        if (!createJarduera($pdo, $jardueraIzenburua, $jardueraData, $jardueraKopurua, $jardueraElkartea, $jardueraIrudia)) {
            $addErrorea = "Errore bat gertatu da zerbitzarian";
        }else{
            header('Location: index.php');
        }

    }

}
?>

<main class="container">
    <h2>Jarduera berria</h2>
    <div class="error"><?= $addErrorea ?></div>
    <form method="post" name="searchForm">
        <label for="jardueraIzenburua">Izenburua</label>
        <input type="text" name="jardueraIzenburua" id="jardueraIzenburua">

        <label for="jardueraData">Data</label>
        <input type="date" name="jardueraData" id="jardueraData">

        <label for="jardueraKopurua">Plaza kopurua</label>
        <input type="number" name="jardueraKopurua" id="jardueraKopurua">

        <label for="jardueraElkartea">Elkartea</label>
        <select name="jardueraElkartea" id="jardueraElkartea">
            <?php foreach ($associations as $association): ?>
                <option value="<?= $association["id"] ?>">
                    <?= $association["name"] ?>
                </option>
            <?php endforeach; ?>

        </select>

        <label for="jardueraIrudia">Irudia</label>
        <input type="file" name="jardueraIrudia" accept=".jpg,.jpeg,.png,.gif,.pdf">
        <button type="submit" name="add-submit">Bilatu </button>
    </form>
</main>


<?php
include("includes/footer.php");

?>