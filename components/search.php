<?php
$posts = searchPost($database->getDb(), sanitize($_GET['q']));
?>

<h1 class="search-title"><?= count($posts) ?> results:</h1>

<?php
require __DIR__ . '/../include/loop.php';
