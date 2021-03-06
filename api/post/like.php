<?php

declare(strict_types=1);

require __DIR__ . '/../../settings.php';
require __DIR__ . '/../../db.php';
require __DIR__ . '/../../functions.php';

if ($_SERVER['REQUEST_METHOD'] != "POST") {
    http_response_code(405);
    header("Location: " . $settings['site_url'] . "/");
    exit;
}

if (!isset($_POST['id']) || empty($_POST['id'])) {
    http_response_code(400);
    exit;
}

// ALL CHECKS PASSED

$postId = intval($_POST['id']);
print_r($_POST);
$ip = $_SERVER['REMOTE_ADDR'];

if (!checkIfIpLikedPost($database->getDb(), $postId, $ip)) {
    http_response_code(201);
    likePost($database->getDb(), $postId, $ip);
    exit;
} else {
    http_response_code(403);
    exit;
}
