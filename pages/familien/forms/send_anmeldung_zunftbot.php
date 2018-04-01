<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION['vorstand']) || $_SESSION['vorstand'] || isset($_SESSION['zuenfter']) || $_SESSION['zuenfter']) {

    if (isset($_POST['email'])) {
        $to = "lukas.abegg1@gmail.com"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $first_name = $_POST['vorname'];
        $last_name = $_POST['name'];
        $jahrgang = $_POST['jahrgang'];
        $adresse = $_POST['adresse'];
        $plz = $_POST['plz'];
        $wohnort = $_POST['wohnort'];

        $nachmittag_teilnahme = $_POST['nachmittag_teilnahme'];
        $nachmittag_erwachsene = $_POST['nachmittag_erwachsene'];
        $nachmittag_kinder = $_POST['nachmittag_kinder'];

        $apero_teilnahme = $_POST['apero_teilnahme'];
        $apero_erwachsene = $_POST['apero_erwachsene'];
        $apero_kinder = $_POST['apero_kinder'];

        $nachtessen_teilnahme = $_POST['nachtessen_teilnahme'];
        $nachtessen_telefon = $_POST['nachtessen_telefon'];
        $nachtessen_email = $_POST['nachtessen_email'];

        $zunftbot_teilnahme = $_POST['zunftbot_teilnahme'];


        // Email
        $subject = "An- / Abmeldung von: $first_name,  $last_name für den Zunftbot";
        $message =
            "<b>Teilnahme am Zunftbot:</b><br><br><br>" .

            "$first_name, $last_name hat das Formular für die Anmeldung zum Zunftbot wie folgt ausgefüllt:<br><br><br>" .
            "Vorname / Nachname: $first_name, $last_name<br>" .
            "Jahrgang: $jahrgang<br>" .
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

        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        //mail("$to; $from", $subject, $message, $headers);

        //DB insert
        $servername = "localhost";
        $port = "8889";
        $username = "root";
        $password = "root";
        $dbname = "schmieden";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname, $port);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO anmeldung_zunftbot (first_name, last_name, email, jahrgang, adresse, plz, wohnort, 
                                            nachmittag_teilnahme, nachmittag_erwachsene, nachmittag_kinder,
                                            apero_teilnahme, apero_erwachsene, apero_kinder,
                                            nachtessen_teilnahme, nachtessen_telefon, nachtessen_email,
                                            zunftbot_teilnahme) 
    VALUES ('$first_name', '$last_name', '$from', '$jahrgang', '$adresse',  '$plz', '$wohnort', 
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
        $url .= "?forms=anmeldung_zunftbot=$page";

        // Weiterleitung zur Startseite
        header("Location: $url");
    }

}