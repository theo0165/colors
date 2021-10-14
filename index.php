<?php require __DIR__ . "/include/header.php"; ?>
<?php

$dbTestData = [
    [
        "id" => 123,
        "name" => "Color pallete 1",
        "colors" => [
            "#000000",
            "#ff00ff",
            "#00ff00",
            "#ff0000",
            "#0000ff"
        ],
        "likes" => 123
    ],
    [
        "id" => 123,
        "name" => "Color pallete 1",
        "colors" => [
            "#000000",
            "#ff00ff",
            "#00ff00",
            "#ff0000",
            "#0000ff"
        ],
        "likes" => 123
    ],
    [
        "id" => 123,
        "name" => "Color pallete 1",
        "colors" => [
            "#000000",
            "#ff00ff",
            "#00ff00",
            "#ff0000",
            "#0000ff"
        ],
        "likes" => 123
    ],
    [
        "id" => 123,
        "name" => "Color pallete 1",
        "colors" => [
            "#000000",
            "#ff00ff",
            "#00ff00",
            "#ff0000",
            "#0000ff"
        ],
        "likes" => 123
    ],
    [
        "id" => 123,
        "name" => "Color pallete 1",
        "colors" => [
            "#000000",
            "#ff00ff",
            "#00ff00",
            "#ff0000",
            "#0000ff"
        ],
        "likes" => 123
    ],
    [
        "id" => 123,
        "name" => "Color pallete 1",
        "colors" => [
            "#000000",
            "#ff00ff",
            "#00ff00",
            "#ff0000",
            "#0000ff"
        ],
        "likes" => 123
    ],
    [
        "id" => 123,
        "name" => "Color pallete 1",
        "colors" => [
            "#000000",
            "#ff00ff",
            "#00ff00",
            "#ff0000",
            "#0000ff"
        ],
        "likes" => 123
    ]
]

?>

<!-- This container is used to place content in the right column and the sidebar in the left column -->
<div class="grid-container">
    <main>
        <div class="posts">
            <?php foreach ($dbTestData as $post) : ?>
                <div class="post">
                    <a href="/single?id=<?= $post['id']; ?>">
                        <div class="colors">
                            <?php foreach ($post['colors'] as $color) : ?>
                                <div style="background: <?= $color; ?>"></div>
                            <?php endforeach; ?>
                        </div>
                    </a>
                    <div class="color-meta">
                        <a href="/single?id=<?= $post['id']; ?>">
                            <div class="name"><?= $post['name'] ?></div>
                        </a>
                        <div class="likes">
                            <i class="fa-solid fa-heart"></i>
                            <?= $post['likes'] ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <?php require __DIR__ . "/include/footer.php"; ?>
</div>
