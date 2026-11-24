<?php
include("includes/header.php");
include("functions/db/connection.php");
include("functions/jarduerakFunctions.php");



$pdo = connectDB();

$jarduerak = jarduerakSelect($pdo);

$gogokoak = $_SESSION['gogokoak'] ?? [];


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['gogokoa-submit'])) {

  $jardueraId = $_POST['jardueraId'];
  $errepikatuta = false;

  if ($gogokoak != null) {
    foreach ($gogokoak as $gogokoa) {

      if ($gogokoa === $jardueraId) {
        $errepikatuta = true;
      }
    }
  }


  if ($errepikatuta == false) {
    array_push($gogokoak, $jardueraId);
    $_SESSION['gogokoak'] = $gogokoak;
  }

}




?>
<main class="container">

  <h2>Auzoko jarduerak</h2>
  <p>Ezagutu gure auzoetako jarduerak eta parte hartu!</p>

  <div class="cards">
    <?php foreach ($jarduerak as $jarduera): ?>
      <article class="card">
        <div class="activity-image" role="img" aria-label="Jardueraren irudia"><img src="../images/<?php
        if ($jarduera["image"] != null) {
          echo $jarduera["image"];
        } else {
          echo "default.png";
        } ?>" alt="<?= $jarduera["image"] ?>"></div>
        <div class="card-body">
          <h3><?= $jarduera["title"] ?></h3>
          <p><strong>Data:</strong> <?= $jarduera["activity_date"] ?></p>
          <p><strong>Plaza kopurua:</strong> <?= $jarduera["capacity"] ?></p>
          <p><strong>Elkartea:</strong> <?= $jarduera["asociationName"] ?></p>
          <p><small>Kategoria: <?= $jarduera["categoryName"] ?></small></p>
          <form method="post">
            <input type="hidden" name="jardueraId" id="jardueraId" value="<?= $jarduera["id"] ?>">
            <button type="submit" name="gogokoa-submit">Gogokoetara gehitu</button>
          </form>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</main>

<?php
include("includes/footer.php");

?>