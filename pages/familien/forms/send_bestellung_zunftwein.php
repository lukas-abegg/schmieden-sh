<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION['vorstand']) || $_SESSION['vorstand'] || isset($_SESSION['zuenfter']) || $_SESSION['zuenfter']) {

    if (isset($_POST['bestellung_zunftwein_vorname'])) {
        $to = "zunftschreiber@schmieden-sh.ch"; // this is your Email address
        $from = $_POST['bestellung_zunftwein_email']; // this is the sender's Email address
        $first_name = $_POST['bestellung_zunftwein_vorname'];
        $last_name = $_POST['bestellung_zunftwein_name'];
        $adresse = $_POST['bestellung_zunftwein_adresse'];
        $plz = $_POST['bestellung_zunftwein_plz'];
        $wohnort = $_POST['bestellung_zunftwein_wohnort'];

        $rechnung_abweichend = $_POST['bestellung_zunftwein_rechnung_abweichend'];

        if ($rechnung_abweichend == "ja") {
            $rechnung_first_name = $_POST['bestellung_zunftwein_rechnung_vorname'];
            $rechnung_last_name = $_POST['bestellung_zunftwein_rechnung_name'];
            $rechnung_adresse = $_POST['bestellung_zunftwein_rechnung_adresse'];
            $rechnung_plz = $_POST['bestellung_zunftwein_rechnung_plz'];
            $rechnung_wohnort = $_POST['bestellung_zunftwein_rechnung_wohnort'];
            $rechnung_email = $_POST['bestellung_zunftwein_rechnung_email'];
        } else {
            $rechnung_first_name = $first_name;
            $rechnung_last_name = $last_name;
            $rechnung_adresse = $adresse;
            $rechnung_plz = $plz;
            $rechnung_wohnort = $wohnort;
            $rechnung_email = $from;
        }

        $bestellung_rot = $_POST['bestellung_zunftwein_bestellung_rot'];
        $bestellung_rot_anzahl = $_POST['bestellung_zunftwein_bestellung_rot_anzahl'];

        $bestellung_weiss = $_POST['bestellung_zunftwein_bestellung_weiss'];
        $bestellung_weiss_anzahl = $_POST['bestellung_zunftwein_bestellung_weiss_anzahl'];

        // Email
        $subject = "Bestellschein Zunftwy zu’n Schmieden Schaffhausen von: $first_name,  $last_name";
        $message =
            "<b>Lieferadresse:</b><br><br><br>" .

            "Vorname / Nachname: $first_name, $last_name<br>" .
            "Email: $from<br>" .
            "Adresse: $adresse<br>" .
            "PLZ / Wohnort: $plz, $wohnort<br><br><br>" .

            "<b>Rechnungsadresse:</b><br><br><br>" .

            "Abweichende Rechnungsadresse: $rechnung_abweichend<br>" .
            "Vorname / Nachname: $rechnung_first_name, $rechnung_last_name<br>" .
            "Email: $rechnung_email<br>" .
            "Adresse: $rechnung_adresse<br>" .
            "PLZ / Wohnort: $rechnung_plz, $rechnung_wohnort<br><br><br>" .

            "Bestellung - <b>Blauburgunder Auslese 2015</b>: $bestellung_rot<br><br>" .
            "Anzahl Flaschen: $bestellung_rot_anzahl<br>" .

            "Bestellung - <b>Riesling x Sylvaner 2015</b>: $bestellung_weiss<br><br>" .
            "Anzahl Flaschen: $bestellung_weiss_anzahl<br>";

        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        mail("$to; $from", $subject, $message, $headers);

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

        $sql = "INSERT INTO bestellung_zunftwein (
                                            first_name, last_name, email, adresse, plz, wohnort, 
                                            rechnung_abweichend, rechnung_first_name, rechnung_last_name, rechnung_email, rechnung_adresse, rechnung_plz, rechnung_wohnort, 
                                            bestellung_rot, bestellung_rot_anzahl,
                                            bestellung_weiss, bestellung_weiss_anzahl
                                            ) 
    VALUES ('$first_name', '$last_name', '$from', '$adresse',  '$plz', '$wohnort', 
            '$rechnung_abweichend', '$rechnung_first_name', '$rechnung_last_name', '$rechnung_email', '$rechnung_adresse', '$rechnung_plz', '$rechnung_wohnort',
            '$bestellung_rot', '$bestellung_rot_anzahl',
            '$bestellung_weiss', '$bestellung_weiss_anzahl'
             )";

        if (!mysqli_query($conn, $sql)) {
            echo "Error: <br>" . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);


        $url = "../../../index.php";
        $page = "#familien";
        $url .= "?forms=bestellung_zunftwein$page";

        // Weiterleitung zur Startseite
        header("Location: $url");
    }

}