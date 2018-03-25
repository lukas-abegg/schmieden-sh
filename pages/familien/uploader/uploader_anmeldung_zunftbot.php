<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION['vorstand']) || $_SESSION['vorstand']) {
    $path = dirname(__FILE__);
    $target_path = $path . "/downloads/Anmeldung_Zunftbot.pdf";

    if ($_FILES["file"]["type"] == "application/pdf") {
        move_uploaded_file($_FILES['file']['tmp_name'], $target_path);
        $success = "true";
    } else {
        $success = "false";
    }

    $doc = "anmeldung_zunftbot";
}

$url = "../../../index.php";
$page = "#familien";
$url .= "?doc=$doc&success=$success$page";

// Weiterleitung zur Startseite
header("Location: $url");