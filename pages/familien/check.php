<?php

$url = "../../index.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_SESSION)) {
        session_start();
    }

    $username = $_POST['username'];
    $passwort = $_POST['passwort'];

    // Vorstand Benutzername und Passwort werden überprüft
    if ($username == 'Vorstand2014' && $passwort == '20VorstandSchmied14') {
        $_SESSION['vorstand'] = true;
    } else {

        // Zuenfter Benutzername und Passwort werden überprüft
        if ($username == 'Zuenfter2014' && $passwort == '20ZuenfterSH14') {
            $_SESSION['zuenfter'] = true;
        } else {
            $url .= "?login_failed=true";
        }
    }

}

$page = "#familien";
$url .= $page;

// Weiterleitung zur Startseite
header("Location: $url");