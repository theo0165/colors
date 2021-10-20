<?php
require __DIR__ . '/../../db.php';
require __DIR__ . '/../../functions.php';

if ($_SERVER['REQUEST_METHOD'] != "POST") {
    header("Location: /");
}

if (
    !isset($_POST['color-0']) ||
    !isset($_POST['color-1']) ||
    !isset($_POST['color-2']) ||
    !isset($_POST['color-3']) ||
    !isset($_POST['color-4']) ||
    !isset($_POST['name'])
) {
    header("Location: /");
}

if (
    empty($_POST['color-0']) ||
    empty($_POST['color-1']) ||
    empty($_POST['color-2']) ||
    empty($_POST['color-3']) ||
    empty($_POST['color-4']) ||
    empty($_POST['name'])
) {
    header("Location: /");
}

$colors = [];

for ($i = 0; $i < 5; $i++) {
    $colorValue = $_POST['color-' . $i];
    $regex = '/^([#][0-9a-zA-Z]{6})$/';

    if (preg_match($regex, $colorValue) != 1) { //Regex checks for hex code
        header("Location: /");
    }

    array_push($colors, $_POST['color-' . $i]);
}

if (strlen($_POST['name']) > 75) {
    header("Location: /");
}

// ALL CHECKS PASSED

createPost($database->getDb(), $_POST['name'], $colors);
