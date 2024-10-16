<?php

function getUsers(PDO $pdo): array {
    $sql = 'select * from users';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $users;
}