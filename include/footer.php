<footer>
    <div>
        <p>Copywrite &copy; <?= date("Y"); ?> <a href="https://github.com/theo0165">Theo Sandell</a></p>
    </div>
    <div class="icons">
        <a href="https://github.com/theo0165"><i class="fa-brands fa-github"></i></a>
        <a href="https://github.com/theo0165/the-elephpant-in-the-room"><i class="fa-solid fa-code-fork"></i></a>
    </div>
</footer>
<?php
$cookieAccepted = false;

if (isset($_COOKIE['cookieAccepted']) && !empty($_COOKIE['cookieAccepted'])) {
    if ($_COOKIE['cookieAccepted'] === true || $_COOKIE['cookieAccepted'] === "true") {
        $cookieAccepted = true;
    }
}
?>
<div class="cookie-consent<?= $cookieAccepted ? " accepted" : ""; ?>">
    <span>By using this site you agree to the use of cookies and collection of ip adresses.</span>
    <button id="cookie-accept">Accept</button>
</div>
<script src="<?= $settings['site_url'] ?>/public/js/cookie.js"></script>
</body>

</html>
