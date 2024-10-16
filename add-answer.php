<?php

include('./database/config.php');
include('./database/models/forms.php');
// $info['questionId'],
//         'answer' => $info['delivery-delay'],
//         'userId' => 1,
//         'orderId' => $info['orderId']

$info = [
    'delivery-delay' => $_POST['delivery-delay'],
    'package-state' => $_POST['package-state'],
    'deliverer-behavior' => $_POST['deliverer-behavior'],
    'order-id' => $_POST['order-id']
];

addAnswer($pdo, $info);

header('Location: dashboard.php');