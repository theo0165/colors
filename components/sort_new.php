<?php
$posts = getPosts($database->getDb(), "new");
require __DIR__ . "/../include/loop.php";
