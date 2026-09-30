<?php

session_start();

if (isset($_SESSION['erabiltzailea'])) {
    header("Location: pages/inicio.php");
    exit;
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $erabiltzailea = trim($_POST['sessionErabiltzailea'] ?? "");
    $pasahitza = trim($_POST['sessionPasahitza'] ?? "");

    if ($erabiltzailea === "" || $pasahitza === "") {
        $error = "Ezin da ezer hutsik utzi.";
    } elseif ($erabiltzailea === "alex" && $pasahitza === "1234") {

        $_SESSION['erabiltzailea'] = htmlspecialchars($erabiltzailea);

        header("Location: index.php");
        exit;

    } else {
        $error = "Erabiltzailea edo pasahitza txarto daude.";
    }
}

include('includes/header.php');

?>

<h1>LOGEATU</h1>

<form action="index.php" method="post">

    <label for="sessionErabiltzailea">Erabiltzailea:</label>
    <input type="text" name="sessionErabiltzailea" id="sessionErabiltzailea">

    <label for="sessionPasahitza">Pasahitza:</label>
    <input type="password" name="sessionPasahitza" id="sessionPasahitza">

    <input type="submit" value="Sartu" name="gehitu">

</form>

<?php if ($error !== ""): ?>
    <p><?= $error ?></p>
<?php endif; ?>

<?php include('includes/footer.php'); ?>