<?php require __DIR__ . "/include/header.php"; ?>
<?php
$uri = $_SERVER['REQUEST_URI'];

// Check if string contains "?".
if (strpos($uri, "?") != false) {
    $uri = substr($uri, 0, strpos($uri, "?"));
}

// Page redirects. Key = url, value = file path to require.
$pages = [
    "/" => __DIR__ . "/components/gallery.php",
    "" => __DIR__ . "/components/gallery.php",
    "/new" => __DIR__ . "/components/new.php",
    "/sort_top" => __DIR__ . "/components/sort_top.php",
    "/sort_new" => __DIR__ . "/components/sort_new.php",
    "/single" => __DIR__ . "/components/single.php",
    "404" => __DIR__ . "/components/404.php"
];

?>

<!-- This container is used to place content in the right column and the sidebar in the left column -->
<div class="grid-container">
    <main>
        <?php
        // Check if current uri is in $pages array, otherwise display 404.
        if (array_key_exists($uri, $pages)) {
            require $pages[$uri];
        } else {
            require $pages["404"];
        }
        ?>
    </main>

    <?php require __DIR__ . "/include/footer.php"; ?>
</div>
