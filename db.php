<?php

$db;

try {
    $db = new PDO("sqlite:" . __DIR__ . "/database.db");
} catch (Exception $e) {
    echo "Unable to connect!";
    echo $e->getMessage();
    exit;
}
