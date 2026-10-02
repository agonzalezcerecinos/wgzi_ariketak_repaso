<?php


function loginUser($pdo, $username, $password)
{
    $sql = "SELECT * FROM erabiltzaileak 
            WHERE erabiltzaile_izena = :user 
            AND pasahitza = :pass";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':user', $username);
    $stmt->bindParam(':pass', $password);
    $stmt->execute();

    return $stmt->fetch();
}
?>