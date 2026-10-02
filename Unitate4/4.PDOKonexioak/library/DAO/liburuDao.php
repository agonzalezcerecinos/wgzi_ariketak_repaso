<?php

function selectLiburuak($pdo)
{
    $sql = "SELECT * FROM liburuak";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll();
}


function insertLiburu(PDO $pdo, $liburua)
{
    $valor = "Hasierako balioa";
    $stmt = $pdo->prepare("INSERT INTO liburuak (columna) VALUES (:liburua)");
    $stmt->bindValue(':liburua', $liburua);
    $stmt->execute();
}
