<?php
if (!isset($_SESSION)) {
    session_start();
}

if ($_SESSION) {
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
}

header('Location: ../../index.php#familien');

