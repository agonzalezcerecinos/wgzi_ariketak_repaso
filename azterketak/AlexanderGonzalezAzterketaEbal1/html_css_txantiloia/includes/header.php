<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>

<!DOCTYPE html>
<html lang="eu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Auzoa Konektatu</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="site-header">
        <div class="container">
            <img src="../images/auzoa_konektatu_logo.png" alt="Auzoa Konektatu logo" class="logo">
            <nav>
                <a href="index.php">Hasiera</a>
                <a href="search.php">Bilatu</a>
                <a href="add.php">Gehitu</a>
                <a href="favorites.php">Gogokoak ♡</a>
            </nav>
        </div>
    </header>