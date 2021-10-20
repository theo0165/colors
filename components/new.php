<?php
//Generate random color hex
//https://stackoverflow.com/a/9901154
function rand_color()
{
    return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
}
?>
<div class="new_pallet">
    <form action="/api/post/new_pallet.php" method="post" class="newPalleteForm">
        <div class="colors">
            <?php for ($i = 0; $i < 5; $i++) : ?>
                <?php $color = rand_color(); ?>
                <div class="color" style="background-color: <?= $color; ?>">
                    <div class="color-overlay">
                        <input type="text" name="color-<?= $i; ?>" value="<?= $color; ?>" id="">
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        <div class="pallete-meta">
            <input type="text" name="name" maxlength="75" placeholder="Pallete Name" id="" class="name">
            <input type="submit" value="Save" class="submit">
        </div>
    </form>
</div>
<script src="/public/js/new_pallet.js"></script>
