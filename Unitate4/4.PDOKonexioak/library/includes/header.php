<?php
require_once __DIR__ . "/../config/config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/styles.css">

</head>

<body>

    <header>
        <h1>Liburutegia</h1>
        <p>Liburu kudeaketa sistema</p>
        <?php
        if (isset($_SESSION['erabiltzailea'])) { ?>
            <nav>
                <ul>
                    <li><a href="<?= BASE_URL ?>index.php">Hasiera</a></li>
                    <li>
                        <a href="<?= BASE_URL ?>pages/add_book.php">Liburu berria</a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL ?>pages/view_book.php">Liburuen kontsulta</a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL ?>pages/search_book.php">Bilatzailea</a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL ?>pages/logout.php">Logout</a>
                    </li>
                </ul>
            </nav>
        <?php
        }
        ?>
    </header>