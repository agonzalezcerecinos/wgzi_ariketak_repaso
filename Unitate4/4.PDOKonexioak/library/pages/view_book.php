<?php 
include __DIR__ . '/../includes/header.php';
require_once __DIR__ . "/../config/config.php";

if (!isset($_SESSION['erabiltzailea'])) {
    header("Location: " . BASE_URL . "index.php");
    exit;
}
?>

<p>view_book is runnig</p>

<?php 
include('../includes/footer.php');
?>