<aside class="sidebar">
    <div class="logo">
        <a href="<?= $settings['site_url']; ?>/">
            <img src="<?= $settings['site_url']; ?>/public/img/COLORS.svg" alt="COLORS">
        </a>
    </div>
    <nav class="menu">
        <ul class="menu-list">
            <li class="menu-item"><a href="<?= $settings['site_url']; ?>/">Home</a></li>
            <li class="menu-item"><a href="<?= $settings['site_url']; ?>/new">New palette</a></li>
            <li class="menu-item"><a href="<?= $settings['site_url']; ?>/sort_top">Top posts</a></li>
            <li class="menu-item"><a href="<?= $settings['site_url']; ?>/sort_new">New posts</a></li>
        </ul>
    </nav>
    <div class="search">
        <form action="<?= $settings['site_url']; ?>/search" method="get" id="search-form">
            <input type="text" name="q" placeholder="Search" id="search-input">
            <i class="fa-solid fa-magnifying-glass" onclick="document.getElementById('search-form').submit();"></i>
        </form>
    </div>
</aside>
