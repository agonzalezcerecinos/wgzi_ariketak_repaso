<?php

function associationSelect(PDO $pdo)
{
    $statement = $pdo->prepare('SELECT * FROM associations');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}



?>