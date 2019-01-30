<?php

$url = "../../index.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_SESSION)) {
        session_start();
    }

    $username = $_POST['username'];
    $passwort = $_POST['passwort'];

    // Vorstand Benutzername und Passwort werden überprüft
    // geheim...... //

}

$page = "#familien";
$url .= $page;

// Weiterleitung zur Startseite
header("Location: $url");