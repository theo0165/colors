<div class="posts">
    <?php foreach ($posts as $post) : ?>
        <div class="post" id="post-<?= $post['id']; ?>">
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
                <div class="likes<?php echo (checkIfIpLikedPost(
                                        $database->getDb(),
                                        $post['id'],
                                        $_SERVER['REMOTE_ADDR']
                                    )) ? " liked" : ""; ?>" onclick="likePost(<?= $post['id']; ?>)">
                    <i class="fa-solid fa-heart"></i>
                    <span><?= $post['likes'] ?></span>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
