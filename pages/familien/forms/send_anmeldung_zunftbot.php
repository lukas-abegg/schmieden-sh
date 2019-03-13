<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION['vorstand']) || $_SESSION['vorstand'] || isset($_SESSION['zuenfter']) || $_SESSION['zuenfter']) {

    if (isset($_POST['anmeldung_zunftbot_email'])) {
        $to = "zunftschreiber@schmieden-sh.ch"; // this is your Email address
        $from = $_POST['anmeldung_zunftbot_email']; // this is the sender's Email address
        $first_name = $_POST['anmeldung_zunftbot_vorname'];
        $last_name = $_POST['anmeldung_zunftbot_name'];
        $geburtstag = $_POST['anmeldung_zunftbot_geburtstag'];
        $telefonnummer = $_POST['anmeldung_zunftbot_telefonnummer'];
        $adresse = $_POST['anmeldung_zunftbot_adresse'];
        $plz = $_POST['anmeldung_zunftbot_plz'];
        $wohnort = $_POST['anmeldung_zunftbot_wohnort'];

        $nachmittag_teilnahme = $_POST['anmeldung_zunftbot_nachmittag_teilnahme'];
        $nachmittag_erwachsene = $_POST['anmeldung_zunftbot_nachmittag_erwachsene'];
        $nachmittag_kinder = $_POST['anmeldung_zunftbot_nachmittag_kinder'];

        $apero_teilnahme = $_POST['anmeldung_zunftbot_apero_teilnahme'];
        $apero_erwachsene = $_POST['anmeldung_zunftbot_apero_erwachsene'];
        $apero_kinder = $_POST['anmeldung_zunftbot_apero_kinder'];

        $nachtessen_teilnahme = $_POST['anmeldung_zunftbot_nachtessen_teilnahme'];
        $nachtessen_telefon = $_POST['anmeldung_zunftbot_nachtessen_telefon'];
        $nachtessen_email = $_POST['anmeldung_zunftbot_nachtessen_email'];

        $zunftbot_teilnahme = $_POST['anmeldung_zunftbot_zunftbot_teilnahme'];


        // Email
        $subject = "An- / Abmeldung von: $first_name,  $last_name für den Zunftbot";
        $message =
            "<b>Teilnahme am Zunftbot:</b><br><br><br>" .

            "$first_name, $last_name hat das Formular für die Anmeldung zum Zunftbot wie folgt ausgefüllt:<br><br><br>" .
            "Vorname / Nachname: $first_name, $last_name<br>" .
            "Geburtstag: $geburtstag<br>" .
            "Telefonnummer: $telefonnummer<br>" .
            "Adresse: $adresse<br>" .
            "PLZ / Wohnort: $plz, $wohnort<br><br><br>" .

            "Ich / Wir nehmen teil am Nachmittagsprogramm: $nachtessen_teilnahme<br><br>" .
            "Anzahl Erwachsene: $nachmittag_erwachsene<br>" .
            "Anzahl Kinder: $nachmittag_kinder<br><br><br>" .

            "Ich / Wir nehmen teil am Apero: $apero_teilnahme<br><br>" .
            "Anzahl Erwachsene: $apero_erwachsene<br>" .
            "Anzahl Kinder: $apero_kinder<br><br><br>" .

            "Teilnahme am Nachtessen der Frauen: $nachtessen_teilnahme<br><br>" .
            "Telefon-Nr.: $nachtessen_telefon<br>" .
            "Email: $nachtessen_email<br><br><br>" .
            "Nur	Zünfter	bitte	<i>Ja</i>	oder	<i>Nein</i>	ankreuzen: $zunftbot_teilnahme";

        $header  = "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html; charset=utf-8\r\n";

        $header .= "From: $from\r\n";
        $header .= "Reply-To: $from\r\n";
        $header .= "X-Mailer: PHP ". phpversion();

        mail("$to, $from", $subject, $message, $header);

        //DB insert
        $servername = "localhost";
        $port = "3306";
        $username = "web418";
        $password = "Schmied$2018";
        $dbname = "schmieden";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname, $port);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO anmeldung_zunftbot (first_name, last_name, email, geburtstag, telefonnummer, adresse, plz, wohnort, 
                                            nachmittag_teilnahme, nachmittag_erwachsene, nachmittag_kinder,
                                            apero_teilnahme, apero_erwachsene, apero_kinder,
                                            nachtessen_teilnahme, nachtessen_telefon, nachtessen_email,
                                            zunftbot_teilnahme) 
    VALUES ('$first_name', '$last_name', '$from', '$geburtstag', '$telefonnummer', '$adresse',  '$plz', '$wohnort', 
            '$nachmittag_teilnahme', '$nachmittag_erwachsene', '$nachmittag_kinder',
            '$apero_teilnahme', '$apero_erwachsene', '$apero_kinder', 
            '$nachtessen_teilnahme', '$nachtessen_telefon', '$nachtessen_email',
            '$zunftbot_teilnahme')";


        if (!mysqli_query($conn, $sql)) {
            echo "Error: <br>" . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);


        $url = "../../../index.php";
        $page = "#familien";
        $url .= "?forms=anmeldung_zunftbot$page";

        // Weiterleitung zur Startseite
        header("Location: $url");
    }

}