<?php
$posts = getPostsSortTop($database->getDb());
require __DIR__ . "/../include/loop.php";
