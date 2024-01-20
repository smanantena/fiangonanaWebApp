<!DOCTYPE html>
<html lang="mg">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/globals.css">
    <?php

use App\Database\Querries\UserQuerries;

    if (isset($pageStyle) && !empty($pageStyle)) {
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/{$pageStyle}\">";
    }
    ?>
    <noscript>
        <link rel="stylesheet" type="text/css" href="assets/css/noscript.css" />
    </noscript>
    <title><?= empty($title) ? "Fiangonana voalohany" : $title; ?></title>
    <script type="text/javascript" src="assets/dist/js/bootstrap.bundle.js" defer></script>
</head>

<body class="is-preload">
    <div id="wrapper">
        <header id="header" class="alt">
            <a href="/" class="logo">
                <strong>Tranokala</strong> <span>ho an'ny fiangonana</span>
            </a>
            <nav>
                <a href="#menu">Menu</a>
            </nav>
        </header>
        <nav id="menu">
            <ul class="links">
                <li><a href="http://<?= $_SERVER['SERVER_NAME'] ?>">Fandraisana</a></li>
                <li><a href="http://<?= $_SERVER['SERVER_NAME'] ?>/toriteny">Toriteny</a></li>
                <li><a href="http://<?= $_SERVER['SERVER_NAME'] ?>/fotoamBavaka">Fotoam-bavaka</a></li>
                <li><a href="http://<?= $_SERVER['SERVER_NAME'] ?>/tetiandro">Tetiandro</a></li>
                <li class="dropdown">
                    <button id="btn-sampana-nav" type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Sampana</button>
                    <ul class="dropdown-menu" aria-labelledby="btn-sampana-nav">
                        <li><a href="http://<?= $_SERVER['SERVER_NAME'] ?>/sampana?sampana=tanora" class="dropdown-item link-dark">Tanora</a></li>
                        <li><a href="http://<?= $_SERVER['SERVER_NAME'] ?>/sampana?sampana=ankizy" class="dropdown-item link-dark">Ankizy</a></li>
                        <li><a href="http://<?= $_SERVER['SERVER_NAME'] ?>/sampana?sampana=vehivavy" class="dropdown-item link-dark">Vehivavy</a></li>
                        <li><a href="http://<?= $_SERVER['SERVER_NAME'] ?>/sampana?sampana=lehilahy" class="dropdown-item link-dark">Lehilahy</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="actions stacked">
                <li><a href="http://<?= $_SERVER['SERVER_NAME'] ?>/fanohanana" class="button primary fit">Fanohanana</a></li>
                <?php
                if (isset($_SESSION['user-id'])) {
                    if (in_array(intval($_SESSION['user-id']), UserQuerries::getUsersIds())) {
                        echo "<li><a href=\"http://{$_SERVER['SERVER_NAME']}/mivoaka\" class=\"button fit\">Miverina ho mpitsidika</a></li>";
                    }
                } else {
                    echo "<li><a href=\"http://{$_SERVER['SERVER_NAME']}/mpikambana\" class=\"button fit\">Mpikambana</a></li>";
                }
                ?>
            </ul>
        </nav>