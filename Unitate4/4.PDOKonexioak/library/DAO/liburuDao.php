<?php

function selectLiburuak($pdo)
{
    $sql = "SELECT * FROM liburuak";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll();
}


function insertLiburu(PDO $pdo, $izenburua, $egilea, $eskuragarri)
{
  $stmt = $pdo->prepare("INSERT INTO liburuak (titulua, autorea, eskuragarri) VALUES (:izenburua, :egilea, :eskuragarri)");
    $liburua = [
        ':izenburua' => $izenburua,
        ':egilea' => $egilea,
        ':eskuragarri' => $eskuragarri,
    ];
$stmt->execute($liburua);
}
