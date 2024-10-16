<?php
include('./database/config.php');
include('./database/models/order.php');
addOrder($pdo, 'REF-X');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feelback</title>
</head>
<body>
    
    <h1>Feelback</h1>
    <h2>Le questionnaire de satisfaction</h2>

    <form action="./add-answer.php" method="post">
        <div>
            <label for="delivery-delay">Respect du délai de livraison</label>
            <input type="radio" name="delivery-delay" id="delivery-delay" value="1">
            <input type="radio" name="delivery-delay" id="delivery-delay" value="2">
            <input type="radio" name="delivery-delay" id="delivery-delay" value="3">
            <input type="radio" name="delivery-delay" id="delivery-delay" value="4">
            <input type="radio" name="delivery-delay" id="delivery-delay" value="5">
        </div>
        <div>
            <label for="package-state">Etat du colis</label>
            <input type="radio" name="package-state" id="package-state" value="1">
            <input type="radio" name="package-state" id="package-state" value="2">
            <input type="radio" name="package-state" id="package-state" value="3">
            <input type="radio" name="package-state" id="package-state" value="4">
            <input type="radio" name="package-state" id="package-state" value="5">
        </div>
        <div>
            <label for="deliverer-behavior">Comportement du livreur</label>
            <input type="radio" name="deliverer-behavior" id="deliverer-behavior" value="1">
            <input type="radio" name="deliverer-behavior" id="deliverer-behavior" value="2">
            <input type="radio" name="deliverer-behavior" id="deliverer-behavior" value="3">
            <input type="radio" name="deliverer-behavior" id="deliverer-behavior" value="4">
            <input type="radio" name="deliverer-behavior" id="deliverer-behavior" value="5">
        </div>

        <input type="hidden" name="order-id" value="<?=getLastOrder($pdo)['id']?>">
        <button type="submit">Envoyer</button>
    </form>        

</body>
</html>