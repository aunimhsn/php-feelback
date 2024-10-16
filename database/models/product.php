<?php

function addProduct($pdo, string $title, float $price_ht) {
    $sql = 'insert into products (title, price_ht) values (:title, :price_ht)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['title' => $title, 'price_ht' => $price_ht]);
}