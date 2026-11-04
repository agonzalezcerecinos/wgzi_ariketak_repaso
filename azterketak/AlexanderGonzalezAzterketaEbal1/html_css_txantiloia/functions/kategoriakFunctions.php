<?php

function selectKategoriak(PDO $pdo)
{
    $statement = $pdo->prepare('SELECT * FROM categories');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}


?>