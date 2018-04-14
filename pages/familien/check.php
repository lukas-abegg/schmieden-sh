<?php

$url = "../../index.php";



$page = "#familien";
$url .= $page;

// Weiterleitung zur Startseite
header("Location: $url");