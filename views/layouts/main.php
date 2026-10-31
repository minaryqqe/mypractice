<?php

use yii\helpers\Url;
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная — Panely</title>
    <meta name="description" content="Panely — трекер прочитанной манги и комиксов">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= Url::to("@web/css/style.css") ?>">
</head>

<body>
    <svg width="0" height="0" style="position:absolute" aria-hidden="true" focusable="false">
        <defs>
            <symbol id="i-home" viewBox="0 0 24 24">
                <path d="M3 11l9-8 9 8v10h-6v-6H9v6H3z" />
            </symbol>
            <symbol id="i-flag" viewBox="0 0 24 24">
                <path d="M6 21V4M6 4h11l-2 4 2 4H6" />
            </symbol>
            <symbol id="i-search" viewBox="0 0 24 24">
                <circle cx="11" cy="11" r="7" />
                <path d="M20 20l-4-4" />
            </symbol>
            <symbol id="i-user" viewBox="0 0 24 24">
                <circle cx="12" cy="8" r="4" />
                <path d="M4 21a8 8 0 0116 0" />
            </symbol>
            <symbol id="i-close" viewBox="0 0 24 24">
                <path d="M6 6l12 12M18 6L6 18" />
            </symbol>
            <symbol id="i-filter" viewBox="0 0 24 24">
                <path d="M4 6h16M7 12h10M10 18h4" />
            </symbol>!
            <symbol id="i-check" viewBox="0 0 24 24">
                <path d="M5 12l5 5 9-10" />
            </symbol>
        </defs>
    </svg>
    <header class="hdr">
        <div class="wrap hdr__in"><a class="logo" href="index.html"><img src="img/logo.svg" alt="" width="26"
                    height="24"><span>Panely</span></a>
            <nav class="nav" aria-label="Основное меню"><a href="progress.html">Прогресс</a><a
                    href="search.html">Поиск</a><a href="profile.html">Профиль</a></nav><a
                class="btn btn--sm hdr__login" href="login.html">Войти</a>
        </div>
    </header>
    <main class="wrap main" id="main">
        <?= $content ?>

    </main>
    <footer class="ftr">
        <div class="wrap">© 2026 Panely · учебный проект</div>
    </footer>
    <nav class="tabbar" aria-label="Мобильное меню"><a href="index.html" aria-current="page"><svg class="ic"
                viewBox="0 0 24 24" aria-hidden="true">
                <use href="#i-home"></use>
            </svg><span>Главная</span></a><a href="progress.html"><svg class="ic" viewBox="0 0 24 24"
                aria-hidden="true">
                <use href="#i-flag"></use>
            </svg><span>Прогресс</span></a><a href="search.html"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true">
                <use href="#i-search"></use>
            </svg><span>Поиск</span></a><a href="profile.html"><svg class="ic" viewBox="0 0 24 24" aria-hidden="true">
                <use href="#i-user"></use>
            </svg><span>Профиль</span></a></nav>
    <script src="js/main.js"></script>
</body>

</html>