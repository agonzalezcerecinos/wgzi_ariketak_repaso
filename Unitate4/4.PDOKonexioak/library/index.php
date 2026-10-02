<?php

session_start();

// connection.php inportatu require_once erabiliz
require_once __DIR__ . "/DAO/connection.php";
require_once __DIR__ . "/DAO/loginDAO.php";


$dbName = 'db_liburutegia';
$pdo = connectDB($dbName);




$error = "";
include('includes/header.php');


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $erabiltzailea = trim($_POST['sessionErabiltzailea'] ?? "");
    $pasahitza = trim($_POST['sessionPasahitza'] ?? "");

    if ($erabiltzailea === "" || $pasahitza === "") {
        $error = "Ezin da ezer hutsik utzi.";
    } elseif (loginUser($pdo, $erabiltzailea, $pasahitza)) {

        $_SESSION['erabiltzailea'] = htmlspecialchars($erabiltzailea);

        header("Location: index.php");
        exit;
    } else {
        $error = "Erabiltzailea edo pasahitza txarto daude.";
    }
}

if (isset($_SESSION['erabiltzailea'])) {


?>
    <main>
        <section class="hasieraSection">
            <article class="">
                <h1>Ongi etorri liburutegira!</h1>
                <p>Aukera ezazu egin nahi duzuna:</p>
                <button>Liburu berria sortu</button>
                <button>Liburuen kontsulta</button>
                <button>Bilatzailea</button>
            </article>

            <article>
                <h5>Sistema informazioa</h5>
                <p>Sistema honek liburuak kudeatzeko aukera ematen du:</p>
                <ul>
                    <li>Liburu berriak gehitu</li>
                    <li>Dauden liburuak kontsultatu</li>
                    <li>Liburuak datuak aldatu</li>
                    <li>Liburuak ezabatu</li>
                    <li>Bilaketa aurretatua egin</li>
                </ul>
            </article>

        </section>
    </main>


<?php } else { ?>
    <main>
        <section class="formSection">
            <article>
                <h1>LOGEATU</h1>
                <form action="index.php" method="post" id="loginForm">
                    <label for="sessionErabiltzailea">Erabiltzailea:</label>
                    <input type="text" name="sessionErabiltzailea" id="sessionErabiltzailea">
                    <label for="sessionPasahitza">Pasahitza:</label>
                    <input type="password" name="sessionPasahitza" id="sessionPasahitza">
                    <input type="submit" value="Sartu" name="gehitu" id="botoia">
                </form>
            <?php
        }

        if ($error !== "") {
            echo '<p class="errorForm">' . $error . '</p>';
        }

            ?>

            </article>
        </section>

    </main>

    <?php
    include('includes/footer.php');
    ?>