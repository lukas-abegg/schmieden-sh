<?php
if (isset($_POST['submit'])) {
    $to = "lukas.abegg1@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['vorname'];
    $last_name = $_POST['name'];
    $jahrgang = $_POST['$jahrgang'];
    $adresse = $_POST['$adresse'];
    $plz = $_POST['$plz'];
    $wohnort = $_POST['$wohnort'];

    $erwachsene_nachmittag = $_POST['$erwachsene_nachmittag'];
    $kinder_nachmittag = $_POST['$kinder_nachmittag'];

    $erwachsene_apero = $_POST['$erwachsene_apero'];
    $kinder_apero = $_POST['$kinder_apero'];

    $nachtessen_teilnahme = $_POST['$nachtessen_teilnahme'];
    $nachtessen_telefon = $_POST['$nachtessen_telefon'];
    $nachtessen_email = $_POST['$nachtessen_email'];

    $zunftbot_teilnahme = $_POST['$zunftbot_teilnahme'];

    $subject = "An- / Abmeldung von: $first_name,  $last_name für den Zunftbot";
    $message =
        "<b>Teilnahme am Zunftbot:</b><br><br><br>" .

        "$first_name, $last_name hat das Formular für die Anmeldung zum Zunftbot wie folgt ausgefüllt:<br><br><br>" .
        "Vorname / Nachname: $first_name, $last_name<br>" .
        "Jahrgang: $jahrgang<br>" .
        "Adresse: $adresse<br>" .
        "PLZ / Wohnort: $plz, $wohnort<br><br><br>" .

        "Ich / Wir nehmen teil am Nachmittagsprogramm:<br><br>" .
        "Anzahl Erwachsene: $erwachsene_nachmittag<br>" .
        "Anzahl Kinder: $kinder_nachmittag<br><br><br>" .

        "Ich / Wir nehmen teil am Apero:<br><br>" .
        "Anzahl Erwachsene: $erwachsene_apero<br>" .
        "Anzahl Kinder: $kinder_apero<br><br><br>" .

        "Teilnahme am Nachtessen der Frauen:<br><br>" .
        "Bei interesse bitte	Telefon	Nr.	angeben	und <i>Ja</i> auswählen: $nachtessen_teilnahme / $nachtessen_telefon<br>" .
        "Email: $nachtessen_email<br><br><br>" .
        "Nur	Zünfter	bitte	<i>Ja</i>	oder	<i>Nein</i>	ankreuzen: $zunftbot_teilnahme";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail("$to; $from", $subject, $message, $headers);
    echo "Mail Sent. Thank you " . $first_name;
}