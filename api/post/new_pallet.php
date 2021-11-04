<?php

declare(strict_types=1);

require __DIR__ . '/../../settings.php';
require __DIR__ . '/../../db.php';
require __DIR__ . '/../../functions.php';

if ($_SERVER['REQUEST_METHOD'] != "POST") {
    header("Location: " . $settings['site_url'] . "/");
}

if (
    !isset($_POST['colors']) ||
    !isset($_POST['name'])
) {
    header("Location: " . $settings['site_url'] . "/");
}

if (
    empty($_POST['colors']) ||
    empty($_POST['name'])
) {
    header("Location: " . $settings['site_url'] . "/");
}

foreach ($_POST['colors'] as $color) {
    $regex = '/^([#][0-9a-zA-Z]{6})$/';

    if (preg_match($regex, $color) != 1) { //Regex checks for hex code
        header("Location: " . $settings['site_url'] . "/");
    }
}

if (strlen($_POST['name']) > 75) {
    header("Location: " . $settings['site_url'] . "/");
}

// ALL CHECKS PASSED
createPost($database->getDb(), trim($_POST['name']), $_POST['colors'], $settings);
