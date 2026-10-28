<?php

function selectLiburuak(PDO $pdo)
{
    $sql = "SELECT * FROM liburuak";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll();
}


function selectLiburua(PDO $pdo, int $idLiburua)
{

    $sql = "SELECT * FROM liburuak WHERE kodea = :kodea";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':kodea', $idLiburua);
    $stmt->execute();

    return $stmt->fetch();
}


function insertLiburu(PDO $pdo, string $izenburua, string $egilea, int $eskuragarri)
{
    $stmt = $pdo->prepare("INSERT INTO liburuak (titulua, autorea, eskuragarri) VALUES (:izenburua, :egilea, :eskuragarri)");
    $liburua = [
        ':izenburua' => $izenburua,
        ':egilea' => $egilea,
        ':eskuragarri' => $eskuragarri,
    ];
    $stmt->execute($liburua);
}

function updateLiburu(PDO $pdo, int $id, string $izenburua, string $egilea, string $eskuragarri)
{
    $stmt = $pdo->prepare("UPDATE liburuak SET titulua = :izenburua, autorea = :egilea, eskuragarri = :eskuragarri WHERE kodea = :id");
    $liburua = [
        ':izenburua' => $izenburua,
        ':egilea' => $egilea,
        ':eskuragarri' => $eskuragarri,
        ':id' => $id
    ];
    $stmt->execute($liburua);

    return true;
}

function deleteLiburu(PDO $pdo, int $id): bool
{
    $stmt = $pdo->prepare("DELETE FROM liburuak WHERE kodea = :id");

    return $stmt->execute([
        ':id' => $id
    ]);
}

function bilatuLiburuak(PDO $pdo, string $izenburua = "", string $autorea = "", ?int $eskuragarri = null)
{
    $sql = "SELECT * FROM liburuak WHERE 1=1";
    $parametroak = [];

    if ($izenburua !== "") {
        $sql .= " AND titulua LIKE :izenburua";
        $parametroak[':izenburua'] = "%$izenburua%";
    }

    if ($autorea !== "") {
        $sql .= " AND autorea LIKE :autorea";
        $parametroak[':autorea'] = "%$autorea%";
    }

    if ($eskuragarri !== null) {
        $sql .= " AND eskuragarri = :eskuragarri";
        $parametroak[':eskuragarri'] = $eskuragarri;
    }

    $stmt = $pdo->prepare($sql);
    $stmt->execute($parametroak);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
