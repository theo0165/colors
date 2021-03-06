<?php
require __DIR__ . "/../settings.php";
require __DIR__ . "/../functions.php";
require __DIR__ . "/../db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C O L O R S</title>
    <!--<link rel="stylesheet" href="/public/style/css/normalize.css">-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= $settings['site_url']; ?>/public/style/css/vars.css">
    <link rel="stylesheet" href="<?= $settings['site_url']; ?>/public/style/css/common.css">
    <link rel="stylesheet" href="<?= $settings['site_url']; ?>/public/style/css/index.css">
    <link rel="stylesheet" href="<?= $settings['site_url']; ?>/public/style/css/sidebar.css">
    <link rel="stylesheet" href="<?= $settings['site_url']; ?>/public/style/css/footer.css">
    <link rel="stylesheet" href="<?= $settings['site_url']; ?>/public/style/css/new.css">
    <link rel="stylesheet" href="<?= $settings['site_url']; ?>/public/style/css/404.css">
    <link rel="stylesheet" href="<?= $settings['site_url']; ?>/public/style/css/components/cookie.css">
    <link rel="stylesheet" href="<?= $settings['site_url']; ?>/public/style/css/media.css">
    <link rel="stylesheet" href="<?= $settings['site_url']; ?>/public/style/css/mobile-nav.css">
    <script src="<?= $settings['site_url']; ?>/public/js/single.js"></script>
    <script src="<?= $settings['site_url']; ?>/public/js/loop.js"></script>
    <script src="<?= $settings['site_url']; ?>/public/js/mobile-menu.js"></script>
    <script>
        let settings = {
            <?php foreach ($settings as $key => $setting) : ?>
                <?php
                if ($key = array_key_last($settings)) {
                    echo $key . ':"' . $setting . '"';
                } else {
                    echo $key . ':"' . $setting . '",';
                } ?>
            <?php endforeach; ?>
        }; // This error can't be fixed...
    </script>
</head>
<?php
$theme = "light-theme";

if (isset($_COOKIE['theme']) && !empty($_COOKIE['theme'])) {
    if ($_COOKIE['theme'] === "light") {
        $theme = "light-theme";
    } else if ($_COOKIE['theme'] === "dark") {
        $theme = "dark-theme";
    }
}
?>

<body class="<?= $theme; ?>">
    <?php require __DIR__ . '/sidebar.php' ?>
    <div class="mobile-menu">
        <div class="logo">
            <a href="<?= $settings['site_url']; ?>/">
                <img src="<?= $settings['site_url']; ?>/public/img/COLORS.svg" alt="COLORS">
            </a>
        </div>
        <div class="right">
            <nav class="menu">
                <div class="close"><i class="fa-solid fa-xmark"></i></div>
                <ul class="menu-list">
                    <li class="menu-item"><a href="<?= $settings['site_url']; ?>/">Home</a></li>
                    <li class="menu-item"><a href="<?= $settings['site_url']; ?>/new">New palette</a></li>
                    <li class="menu-item"><a href="<?= $settings['site_url']; ?>/sort_top">Top posts</a></li>
                    <li class="menu-item"><a href="<?= $settings['site_url']; ?>/sort_new">New posts</a></li>
                </ul>
            </nav>
            <div class="hamburger">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </div>
