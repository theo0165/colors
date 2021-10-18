<?php
//TODO: Fix copy to clipboard

if (!isset($_GET['id']) || $_GET['id'] == "") {
    header("Location: /"); //Redirect home if id parameter is not set or empty.
}

$post = getPost($database->getDb(), intval($_GET['id']));

if (empty($post)) {
    header("Location: /"); //Redirect home if id is invalid
}
?>
<div class="single">
    <div class="colors">
        <?php foreach ($post['colors'] as $color) : ?>
            <div class="color" style="background-color:<?= $color ?>">
                <div class="color-overlay">
                    <p class="color-overlay-hex"><?= $color; ?></p>
                    <p>Click to copy</p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="meta">
        <div class="right">
            <div class="name"><?= $post['name']; ?></div>
            <div class="created_date">Created: <?= date("d F Y", strtotime($post['created_at'])); ?></div>
        </div>
        <div class="left">
            <div class="likes">
                <i class="fa-solid fa-heart"></i><?= $post['likes']; ?>
            </div>
        </div>
    </div>
</div>
