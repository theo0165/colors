<?php
//Generate random color hex
//https://stackoverflow.com/a/9901154
function rand_color()
{
    return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
}
?>
<div class="new_palette">
    <form action="<?= $settings['site_url']; ?>/api/post/new_pallet.php" method="post" class="newpaletteForm">
        <div class="colors">
            <?php for ($i = 0; $i < 5; $i++) : ?>
                <?php $color = rand_color(); ?>
                <div class="color" style="background-color: <?= $color; ?>">
                    <div class="color-overlay">
                        <label for="color-<?= $i; ?>">Color <?= $i + 1; ?>, click to change:</label>
                        <input type="text" name="colors[]" value="<?= $color; ?>" id="">
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        <div class="palette-meta">
            <div class="name-container">
                <label for="name">Palette Name:</label>
                <input type="text" required name="name" maxlength="75" id="" class="name">
            </div>
            <input type="submit" value="Save" class="submit">
        </div>
    </form>
</div>
<script src="<?= $settings['site_url']; ?>/public/js/new_pallet.js"></script>
