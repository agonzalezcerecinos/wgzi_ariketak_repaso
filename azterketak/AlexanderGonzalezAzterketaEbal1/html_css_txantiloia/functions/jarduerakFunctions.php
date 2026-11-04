<?php

function jarduerakSelect(PDO $pdo)
{
    $statement = $pdo->prepare('SELECT ac.id, ac.title, ac.activity_date, ac.capacity, ac.image, ass.name AS asociationName, cat.name AS categoryName FROM activities ac JOIN associations ass ON ass.id = ac.association_id JOIN categories cat ON cat.id = ass.category_id');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function jarduerakSelectId(PDO $pdo, int $jardueraId)
{
    $statement = $pdo->prepare('SELECT ac.id, ac.title, ac.activity_date, ac.capacity, ac.image, ass.name AS asociationName, cat.name AS categoryName FROM activities ac JOIN associations ass ON ass.id = ac.association_id JOIN categories cat ON cat.id = ass.category_id WHERE ac.id = :id');
    $statement->bindParam(':id', $jardueraId);
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function bilatuJarduera(PDO $pdo, int $idKategoria)
{
    $statement = $pdo->prepare('SELECT ac.id, ac.title, ac.activity_date, ac.capacity, ac.image, ass.name AS asociationName, cat.name AS categoryName FROM activities ac JOIN associations ass ON ass.id = ac.association_id JOIN categories cat ON cat.id = ass.category_id WHERE cat.id = :catId');
    $statement->bindParam(':catId', $idKategoria);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function createJarduera(PDO $pdo, string $titulua, string $data, string $kopurua, string $elkarteId, string $irudia = "")
{
    // Prepare a query to add a new user.
    $statement = $pdo->prepare("INSERT INTO activities (title, activity_date, capacity, image, association_id) VALUES (:titulua, :data, :kopurua, :irudia, :elkarteId)");

    // Prepare the data for the query.
    $parameters = [
        ':titulua' => $titulua,
        ':data' => $data,
        ':kopurua' => $kopurua,
        ':elkarteId' => $elkarteId,
        ':irudia' => $irudia
    ];

    // Save the new user in the database and return the result.
    return $statement->execute($parameters);
}


?>