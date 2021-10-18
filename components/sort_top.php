<?php
$posts = getPosts($database->getDb(), "top");
require __DIR__ . "/../include/loop.php";
