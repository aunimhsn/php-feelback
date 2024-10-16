<?php

function addAnswer($pdo, array $info): void
{
    $sql = 'insert into forms_has_questions (forms_id, questions_id, answer, users_id, orders_id)
            values (:formId, :questionId, :answer, :userId, :orderId)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'formId' => 1,
        'questionId' => 1,
        'answer' => $info['delivery-delay'],
        'userId' => 1,
        'orderId' => $info['order-id']
    ]);

    $sql = 'insert into forms_has_questions (forms_id, questions_id, answer, users_id, orders_id)
    values (:formId, :questionId, :answer, :userId, :orderId)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'formId' => 1,
        'questionId' => 2,
        'answer' => $info['package-state'],
        'userId' => 1,
        'orderId' => $info['order-id']
    ]);

    $sql = 'insert into forms_has_questions (forms_id, questions_id, answer, users_id, orders_id)
    values (:formId, :questionId, :answer, :userId, :orderId)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'formId' => 1,
        'questionId' => 3,
        'answer' => $info['deliverer-behavior'],
        'userId' => 1,
        'orderId' => $info['order-id']
    ]);
}

function getAnswersCount($pdo) : int {
    $sql = 'select count(distinct questions_id) from forms_has_questions where forms_id = 1';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $questionsCount = $stmt->fetchColumn();



    $sql = 'select count(*) from forms_has_questions where forms_id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $answersCountByQuestion = $stmt->fetchColumn();

    return (int) $answersCountByQuestion / $questionsCount;
}

function getAvgMarkDeliveryDelay($pdo) {
    $sql = 'select avg(answer) from forms_has_questions WHERE questions_id = 1 and forms_id = 1';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $avgMarkDeliveryDelay = $stmt->fetchColumn();

    return round($avgMarkDeliveryDelay, 2);
}

function getAvgMarkPackageState($pdo) {
    $sql = 'select avg(answer) from forms_has_questions WHERE questions_id = 2 and forms_id = 1';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $avgMarkPackageState = $stmt->fetchColumn();

    return round($avgMarkPackageState, 2);
}

function getAvgMarkDelivererBehavior($pdo) {
    $sql = 'select avg(answer) from forms_has_questions WHERE questions_id = 3 and forms_id = 1';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $avgMarkDelivererBehavior = $stmt->fetchColumn();

 
    return round($avgMarkDelivererBehavior, 2);
}