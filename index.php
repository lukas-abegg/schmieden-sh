<!DOCTYPE html>
<html lang="en">
<head>
    <title>Zunft zu'n Schmieden Schaffhausen</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118926817-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-118926817-1');
    </script>

    <meta name="author" content="Zunft zu'n Schmieden Schaffhausen">
    <meta name="description"
          content="Den Hammer wählt die Zunft als Bild der Mannesstärke, die Zange als das Sinnbild ihrer Willenskraft. Verein’ge damit noch der hier gekrümmten Schlange Ringelzeichen, ruft Bürg’schaft laut: Vom Schmied wird ewig nie die Bürgertreue weichen.">
    <meta name="keywords" content="Zunft, Schaffhausen, Zunft zu'n Schmieden, Schmiedezunft, Schaffhauser Zünfte">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta name="ROBOTS" content="INDEX, FOLLOW">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>

    <link rel="icon" type="image/jpg" href="images/new/favicon.png" sizes="32x32">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/news.css">
    <link rel="stylesheet" href="css/historie.css">
    <link rel="stylesheet" href="css/silber.css">
    <link rel="stylesheet" href="css/vorstand.css">
    <link rel="stylesheet" href="css/familien.css">
    <link rel="stylesheet" href="css/events.css">
    <link rel="stylesheet" href="css/links.css">
    <link rel="stylesheet" href="css/forms.css">

    <script type="text/javascript" src="js/jquery-latest.min.js"></script>
    <script type="text/javascript" src="jquery.url.js"></script>
    <script type="text/javascript" src="js/responsive-nav.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
    <script type="text/javascript" src="js/forms.js"></script>
</head>
<body>

<?php session_start(); ?>

<header>
    <nav class="nav-collapse">
        <ul>
            <li class="menu-item active"><a href="#home" data-scroll>Startseite</a></li>
            <li class="menu-item"><a href="#news" data-scroll>News</a></li>
            <li class="menu-item"><a href="#history" data-scroll>Historie</a></li>
            <li class="menu-item"><a href="#vorstand" data-scroll>Vorstand</a></li>
            <li class="menu-item"><a href="#silber" data-scroll>Silber</a></li>
            <li class="menu-item"><a href="#familien" data-scroll>Familien</a></li>
            <li class="menu-item"><a href="#events" data-scroll>Events</a></li>
            <li class="menu-item"><a href="#links" data-scroll>Links</a></li>
        </ul>
    </nav>
</header>

<!-- The Modal -->
<div id="imgModal" class="modal">
    <span class="close-modal">&times;</span>
    <img class="modal-content" id="imgPlaceInModal">
    <div id="caption"></div>
</div>

<!-- The Banner Modal -->
<div id="imgModalBanner" class="modal-banner">
    <span class="close-modal-banner">&times;</span>
    <img class="modal-content-banner" id="imgPlaceInModalBanner">
    <div id="captionBanner"></div>
</div>


<section id="home" class="section-home" data-stellar-background-ratio="0.5">
    <?php include("pages/home.php"); ?>
</section>

<section id="news" class="section-news" data-stellar-background-ratio="0.5">
    <?php include("pages/news.php"); ?>
</section>

<section id="history" class="section-history" data-stellar-background-ratio="0.5">
    <?php include("pages/historie.php"); ?>
</section>

<section id="vorstand" class="section-vorstand" data-stellar-background-ratio="0.5">
    <?php include("pages/vorstand.php"); ?>
</section>

<section id="silber" class="section-silber" data-stellar-background-ratio="0.5">
    <?php include("pages/silber.php"); ?>
</section>

<section id="familien" class="section-familien" data-stellar-background-ratio="0.5">
    <?php include("pages/familien.php"); ?>
</section>

<section id="events" class="section-events" data-stellar-background-ratio="0.5">
    <?php include("pages/events.php"); ?>
</section>

<section id="links" class="section-links" data-stellar-background-ratio="0.5">
    <?php include("pages/links.php"); ?>
</section>

<script src="js/image-modal.js"></script>
<script src="js/submenue.js"></script>
<script src="js/upload.js"></script>
<script src="js/fastclick.js"></script>
<script src="js/scroll.js"></script>
<script src="js/fixed-responsive-nav.js"></script>
</body>
</html>
