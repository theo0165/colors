<?php $posts = getPosts($database->getDb()); ?>
<div class="posts">
    <?php foreach ($posts as $post) : ?>
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
