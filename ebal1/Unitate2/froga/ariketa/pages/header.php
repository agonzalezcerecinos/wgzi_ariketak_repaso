<!DOCTYPE html>
<html lang="eu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tx_Series</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <div class="goiburua">
            <img src="img/logo.png" alt="tx_series_logoa">
            <nav>

                <a href="index.php">Hasiera</a>
                <a href="bilatu.php">Bilatu</a>
                <?php
                if (isset($_SESSION['erabiltzailea'])) {
                    echo '<a href="gehitu.php">Seriea gehitu</a>
                    <a href="estatistikak.php">Estatistikak</a>
                    <a href="logout.php">Logout</a>';
                }else{
                    echo '<a href="login.php">Login</a>';
                }
                ?>
                
            </nav>
        </div>
    </header>