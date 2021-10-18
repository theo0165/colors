<?php
    $posts = getPosts($database->getDb());
    require __DIR__ . "/../include/loop.php";
