<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8"/>
    <title>Bank v0.1</title>
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/mystyle.css">
    <link rel="stylesheet" href="./css/skeleton.css">
</head>

<body>

<nav>
    <?php // Menu einbinden
    include 'navigation.php'; ?>
</nav>

<div class="mybody">

    <?php

    //Verbindet mit Datenbank
    include "config.php";

    //Lädt Helper Funktionen
    include './helper/helper.php';

    //Ruft gewünschte Seite auf
    if (isset($_GET['seite'])) {

        switch ($_GET['seite']) {

            case 'home':
                include "./src/home.php";
                break;

            case 'service':
                include "./src/service.php";
                break;

            default:
                include "./src/welcome.php";
                break;
        }
    }
    ?>
</div>

</body>
</html>