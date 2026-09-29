<?php session_start(); ?>

<?php include 'pages/header.php'; ?>
<?php require 'functions/funtzioak.php'; ?>
<?php require 'data/datuak.php'; ?>


<main>

    <h1>Tx_Series</h1>

    <section class="serieak">
        <?php
        foreach ($series as $serie => $serieDatuak) {
            echo '<article class="seriea">';
            echo '<img src="' . $series[$serie]["irudia"] . '" alt="' . $series[$serie]["izenburua"] . '">';
            echo '<div>';
            echo '<h2> ' . $series[$serie]["izenburua"] . ' </h2>';
            echo '<p>  ' . $series[$serie]["generoa"] . ' </p>';
            echo '<p>  ' . $series[$serie]["denboraldiak"] . " denboraldi" . ' </p>';
            echo '<p>  ' . "Balorazioa: " . $series[$serie]["balorazioa"] . ' </p>';

            if ($series[$serie]["amaituta"] == true) {
                echo '<p>  Martxan </p>';
            } else {
                echo '<p>  Amaituta </p>';
            }

            echo '</div>';
            echo '</article>';
        }
        ?>
    </section>
</main>

<?php include 'pages/footer.php'; ?>