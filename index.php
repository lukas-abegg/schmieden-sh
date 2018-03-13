<!DOCTYPE html>
<html lang="de">
<head>
<title>ValAir</title>
	<meta name="author" content="Valéry Döhler/Lukas Abegg">
	<meta name="description" content="ValAir ist eine geplante All-You-Can-Fly Airline. Wir möchten die Bequemlichkeit und Faszination des Fliegens, 
							die irgendwo zwischen langen Warteschlangen, komplizierten Buchungssystemen und versteckten Gebühren verloren gegangen sind, wiederbeleben">
	<meta name="keywords" content="all you can fly, ValAir, Flying, Airline, Fluggesellschaft, Warteschlange, waiting list, fliegen, flying, air, fly, Flugzeug, plane">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8">
	<meta name="ROBOTS" content="INDEX, FOLLOW">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>

<link rel="stylesheet" media="all and (max-device-width: 479px)" type="text/css" href="styles/DE_Style_320_480Resolution.css">
<link rel="stylesheet" media="all and (min-device-width: 480px) and (max-device-width: 799px)" type="text/css" href="styles/DE_Style_480_320Resolution.css">
<link rel="stylesheet" media="all and (min-device-width: 800px) and (max-device-width: 999px)" type="text/css" href="styles/DE_Style_800_600Resolution.css">
<link rel="stylesheet" media="all and (min-device-width: 1000px) and (max-device-width: 1399px)" type="text/css" href="styles/DE_Style_1024_768Resolution.css">
<link rel="stylesheet" media="all and (min-device-width: 1400px) and (max-device-width: 1799px)" type="text/css" href="styles/DE_Style_1440_900Resolution.css">
<link rel="stylesheet" media="all and (min-device-width: 1800px)" type="text/css" href="styles/DE_Style_1920_1000Resolution.css"> 

<link rel="icon" type="image/png" href="images/favicon.png" sizes="32x32">

<script type="text/javascript" src="js/jquery-latest.min.js"></script>
<script type="text/javascript" src="js/jquery.stellar.min.js"></script>	
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/script.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53908854-1', 'auto');
  ga('send', 'pageview');

</script>

</head>
<body>
    <div id="navigation">
        <ul id="navBar">
            <li data-slide="1" class="current">Startseite</li>
            <li data-slide="2">F&uuml;r Mitglieder</li>
            <li data-slide="3">Routen</li>
            <li data-slide="4">Mehr Infos</li>
        </ul>
    </div>
<div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">
	<img id="logo" src="images/LogoValair.png">
    <div id="logotext"><b>VAL</b>AIR</div>
    <div id="title">ALL-YOU-CAN-FLY</div>
    <div id="titledesc">Linienfl&uuml;ge mit Privat-Jet-Erlebnis<br>
			1,200 € pro Monat</div>
    <div id="lang"><a id="langLink" href="de">DE</a> |
        <a id="langLink" href="en">EN</a></div>
    <a class="buttonWaitingList" data-slide="2">Warteliste</a>
    <a class="buttonMoreInfo" data-slide="4">Mehr Infos</a>
    <a class="button" data-slide="2" title=""></a>
</div>
<div class="slide" id="slide2" data-slide="2" data-stellar-background-ratio="0.5">
    <div id="TitleSlide">F&uuml;r Mitglieder</div>
    <div id="noWaiting"></div>
    <div id="userTitle">Keine Warteschlangen</div>
    <div id="userText">Sie werden persönlich am Flughafen empfangen
		und können minutenschnell einsteigen.
		Park- & Transportmöglichkeiten immer vor Ort.</div>
    <div id="forFree"></div>
    <div id="userTitleRight">Keine Gebühren</div>
    <div id="userTextRight">Gepäck? Kostenfrei. Last Minute Buchungen 
		und Stornierungen? Kostenfrei. Sie zahlen 
		Ihren Mitgliedsbeitrag. Das ist alles.</div>
     <div id="ThirtySec"></div>
    <div id="userTitleD">Buchen in 30 Sekunden</div>
    <div id="userTextD">Buchen Sie mehrere Flüge über
		Ihr Smartphone oder direkt von
		zu Hause.</div>
    <div id="firstClass"></div>
    <div id="userTitleRightD">Erste-Klasse-Erlebnis</div>
    <div id="userTextRightD">Keine vollen Flughäfen. Private Terminals
		mit kostenlosem WIFI. Kurz vor Start ankommen und in geräumigen Privatmaschinen 
		Platz nehmen. Sie fliegen nur mit Mitgliedern.
    </div>
    <div id="contactU-form">
        <p id="failure"></p>
        <p id="success"></p>
        <form method="post" action="#openEmailPopup">
        	<input type="hidden" name="action" value="EmailSend">
            <input type="email" id="email" name="email" value="" placeholder="Email-Adresse f&uuml;r Neuigkeiten" required="required" />
            <input type="submit" value="Abschicken" id="submit" />
        </form>
    </div>
    	<a class="button" data-slide="3" title=""></a>
</div>

<div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.5">
    <div id="TitleSlide">Routen</div>
    <div id="dmap"></div>
    <div id="routesTitle">Wir planen t&auml;gliche Routen</div>
    <div id="routesText">zwischen Berlin, Mannheim, Hannover, Ruhrgebiet,
        Sylt und Ingolstadt. </div>
    <div id="contactR-form">
        <p id="failure"></p>
        <p id="success"></p>
        <form method="post" action="#openRoutePopup">
        	<input type="hidden" name="action" value="RouteSend">
            <input type="route" id="email" name="route" value="" placeholder="Weitere Route vorschlagen" required="required" />
            <input type="submit" value="Abschicken" id="submit" />
        </form>
    </div>
	<a class="button" data-slide="4" title=""></a>
</div>
<div class="slide" id="slide4" data-slide="4" data-stellar-background-ratio="0.5">
    <div id="TitleSlide">Mehr Infos</div>
	<div id="moreInfosTextK">„Wer die Menschen einst fliegen lehrte, hat alle Grenzsteine verr&uuml;ckt“<br>
			- F.W. Nietsche<br>
        </div>
    <div id="moreInfosText">
       	ValAir ist eine geplante All-You-Can-Fly Airline. Für rund 1.200 € 
		Mitgliedsbeitrag pro Monat, wollen wir Linienflüge zwischen Berlin, 
		Mannheim, Ingolstadt, dem Ruhrgebiet, Sylt und Hannover anbieten. Wir 
		m&ouml;chten die Bequemlichkeit und Faszination des Fliegens, die irgendwo 
		zwischen langen Warteschlangen, komplizierten Buchungssystemen und 
		versteckten Gebühren verloren gegangen sind, wiederbeleben. Bei ValAir 
		spart man Zeit und kann bei besonderem Service, mühelos die Lüfte 
		erklimmen.</div>
    <a class="button last" data-slide="1" title=""></a>

     	<section class="hr">
     	<div>
     		<div class="cp">© 2014 by ValAir</div>
    		<div class="hrtext"><a href="#openImpressum">Impressum & Datenschutz</a></div>
        	<div class="hrtext"><a href="#openContact">Kontakt</a></div>
        	<div class="hrbutton"><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.val-air.com" data-text="Check out this new private airline" data-hashtags="AllYouCanFly">Tweet
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</a></div>
			<div class="hrbutton"><script src="//platform.linkedin.com/in.js" type="text/javascript">
  			lang: en_US
			</script>
			<script type="IN/Share" data-url="http://www.val-air.com" data-counter="right"></script>
			</div>
        	<div class="hrbutton"><div data-url="http://www.val-air.com" data-counter="right" data-type="XING/Share">
            	<script>
                ;(function (d, s) {
                  var x = d.createElement(s),
                  s = d.getElementsByTagName(s)[0];
                  x.src = "https://www.xing-share.com/js/external/share.js";
                  s.parentNode.insertBefore(x, s);
                  })(document, "script");
                </script></div>
         		</div>
		</div>
		</section>      
        
        <div id="openImpressum" class="modalDialog">
            <div style="overflow:scroll;" id="impressumDialog">
                <a href="#close" title="Close" id="closeContact">X</a>
                <h2>Impressum & Datenschutz</h2>
                <br>
                <span id="impMOBILE">Entwickelt von Valéry Döhler</span>Designt von Lukas Abegg<br>
                <!--<span id="impMOBILE"><a style="color:black" href="mailto:val@val-air.com?subject=Kontaktanfrage an Valery Dohler von ValAir">val@val-air.com</a></span><a style="color:black" href="mailto:lukas@val-air.com?subject=Kontaktanfrage an Lukas Abegg von ValAir">lukas@val-air.com</a>
                -->
                <br>
                <p>Erbacher Str. 6</p>
                <p>D-14193 Berlin</p>
                <!--<p>E-Mail: <a style="color:black" href="mailto:hello@val-air.com?subject=Kontaktanfrage an ValAir">hello@val-air.com</href></p>-->
                <br>
                <p>Bei Fragen, Feedback, Bewerbungen oder Investitionsanfragen, zögern Sie nicht uns zu kontaktieren. Wir freuen uns auf Ihre Nachricht. 

                </p>
                <br>
                <p><b>Haftungsbeschränkung für eigene Inhalte:</b> Alle Inhalte unseres Internetauftritts wurden mit Sorgfalt und nach bestem Gewissen erstellt. Eine Gewähr für die Aktualität, Vollständigkeit und Richtigkeit sämtlicher Seiten kann jedoch nicht übernommen werden. Gemäß § 7 Abs. 1 TMG sind wir als Dienstanbieter für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich, nach den §§ 8 bis 10 TMG jedoch nicht verpflichtet, die übermittelten oder gespeicherten fremden Informationen zu überwachen. Eine umgehende Entfernung dieser Inhalte erfolgt ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung und wir haften nicht vor dem Zeitpunkt der Kenntniserlangung.
					<br><br>
                
                <b>Haftungsbeschränkung für externe Links:</b> Unsere Webseite enthält sog. „externe Links“ (Verknüpfungen zu Webseiten Dritter), auf deren Inhalt wir keinen Einfluss haben und für den wir aus diesem Grund keine Gewähr übernehmen. Für die Inhalte und Richtigkeit der Informationen ist der jeweilige Informationsanbieter der verlinkten Webseite verantwortlich. Als die Verlinkung vorgenommen wurde, waren für uns keine Rechtsverstöße erkennbar. Sollte uns eine Rechtsverletzung bekannt werden, wird der jeweilige Link umgehend von uns entfernt.
					<br><br>
                    <b>Urheberrecht:</b> Die auf dieser Webseite veröffentlichten Inhalte und Werke unterliegen dem deutschen Urheberrecht. Jede Art der Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechts bedarf der vorherigen schriftlichen Zustimmung des jeweiligen Urhebers bzw. Autors.
                    <br><br>
                    <b>Datenschutz:</b> Durch den Besuch unseres Internetauftritts können Informationen über den Zugriff (Datum, Uhrzeit, aufgerufene Seite) auf dem Server gespeichert werden. Dies stellt keine Auswertung personenbezogener Daten (z.B. Name, Anschrift oder E-Mail Adresse) dar. Sofern personenbezogene Daten erhoben werden, erfolgt dies – sofern möglich – nur mit dem vorherigen Einverständnis des Nutzers der Webseite. Eine Weiterleitung der Daten an Dritte findet ohne ausdrückliche Zustimmung des Nutzers nicht statt. Wir weisen ausdrücklich darauf hin, dass die Übertragung von Daten im Internet (z.B. per E-Mail) Sicherheitslücken aufweisen kann. Ein lückenloser Schutz der Daten vor dem Zugriff Dritter kann nicht gewährleistet werden. Wir können keine Haftung für die durch solche Sicherheitslücken entstehenden Schäden übernehmen. Der Verwendung veröffentlichter Kontaktdaten durch Dritte zum Zwecke von Werbung wird ausdrücklich widersprochen. Wir behalten uns rechtliche Schritte für den Fall der unverlangten Zusendung von Werbeinformationen, z.B. durch Spam-Mails, vor.
 				</p>

            </div>
        </div>
        
        <div id="openContact" class="modalDialog">
            <div style="overflow:scroll;" id="contactDialog">
                <a href="#close" title="Close" id="closeContact">X</a>
                <h2>Kontaktformular</h2>
                <br>
                <p id="success"></p>
                        <form method="post" action="#openContactPopup">
                        	<input type="hidden" name="action" value="ContactSend">
                            <label id="contactForm" for="name">Name: <span class="required">*</span></label>
                            <input type="text" id="name" name="name" value="" placeholder="Ihr Name" required="required" autofocus="autofocus" />
                            <br>
                            <label id="contactForm" for="email">E-Mail: <span class="required">*</span></label>
                            <input type="email" id="email" name="email" value="" placeholder="Ihre@email.com" required="required" />
                            <br>
                            <label id="contactForm" for="subject">Betreff: <span class="required">*</span></label>
                            <input type="text" id="subject" name="subject" value="" placeholder="Betreff" required="required" autofocus="autofocus" />
                            <br>
                            <label id="contactForm" for="message">Nachricht: <span class="required">*</span></label>
                            <textarea id="message" name="message" placeholder="Schreiben Sie hier Ihre Nachricht." required="required"></textarea>
                            <br><br>
                            <input type="submit" value="Absenden" id="submitC" />
                        </form>
                <br><br><br>
                <p>Telefon: +49 (0) 178 712 4577</p>
                <!--<p><a style="color:black" href="mailto:hello@val-air.com?subject=Kontaktanfrage an ValAir">E-Mail: hello@val-air.com</href></p>-->
            </div>
        </div>
        
         <div id="openEmailPopup" class="modalDialog">
            <div style="overflow:scroll;" id="emailDialog">
                <a href="#close" title="Close" id="closeContact">X</a>
                <h2>Danke für Ihr Interesse</h2>
                <br>
                <p>Wir freuen uns, dass Sie Interesse an unserer Idee gefunden haben.
                	Wenn Sie irgendwelche Fragen haben, zögern Sie bitte nicht uns zu kontaktieren.
                </p>
                <br><br>
                <p>Telefon: +49 (0) 178 712 4577</p>
                <p>Kontakt über Kontaktformular</p>
                <!--<p><a style="color:black" href="mailto:hello@val-air.com?subject=Kontaktanfrage an ValAir">E-Mail: hello@val-air.com</href></p>-->
            
            </div>
        </div>
        
         <div id="openRoutePopup" class="modalDialog">
            <div style="overflow:scroll;" id="routeDialog">
                <a href="#close" title="Close" id="closeContact">X</a>
                <h2>Danke für Ihren Routen Vorschlag</h2>
                <br>
                <p>Wir freuen uns, dass Sie Interesse an unserer Idee gefunden haben.
                	Wenn Sie irgendwelche Fragen haben, zögern Sie bitte nicht uns zu kontaktieren.
                </p>
                <br><br>
                <p>Telefon: +49 (0) 178 712 4577</p>
                <p>Kontakt über Kontaktformular</p>
              <!--<p><a style="color:black" href="mailto:hello@val-air.com?subject=Kontaktanfrage an ValAir">E-Mail: hello@val-air.com</href></p>-->
            
            </div>
        </div>
        
        <div id="openContactPopup" class="modalDialog">
            <div style="overflow:scroll;" id="opencontactDialog">
                <a href="#close" title="Close" id="closeContact">X</a>
                <h2>Danke für Ihre Kontaktaufnahme</h2>
                <br>
                <p>Wir werden uns so schnell wie möglich bei Ihnen melden.
                </p>
                <br><br>
                <p>Telefon: +49 (0) 178 712 4577</p>
                <!--<p><a style="color:black" href="mailto:hello@val-air.com?subject=Kontaktanfrgae an ValAir">E-Mail: hello@val-air.com</href></p>-->
            
            </div>
        </div>
        
    </div>
</body>

<?php
    // bei register_globals = Off
    $PHP_SELF = $_SERVER['PHP_SELF'];
    if(isset($_POST['action'])){
    if($_POST['action'] == "EmailSend"){
    	
    	//Empfänger
    	$to  = 'hello@val-air.com';
    
    	//Email-Adresse Interessent
    	$email = $_POST['email'];
    
        // Betreff
        $subject = 'Neuer Interessent bei ValAir';
    
        // Nachricht
        $message = '
        <html>
        <head>
        <title>Neuer Interessent bei ValAir</title>
        </head>
        <body>
        <p>Es ist ein neuer Interessent da:</p>
        <table>
        <tr>
        <th>Email-Adresse</th><th>'.$email.'</th>
        </tr>
        </table>
        </body>
        </html>
        ';
    
        // Um HTML Mails zu versenden, muss der Content Type gesetzt sein
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: hello@val-air.com' . "\r\n";
    
        // Mail it
        mail($to, $subject, $message, $headers);
		
		// Datenbank Eintrag erstellen
		$con = mysql_connect("localhost","bamboojet","Berlin123");
		mysql_select_db("valair_DB", $con);
		$sql="INSERT INTO emails(email) VALUES('$email')";
		mysql_query( $sql, $con );
		mysql_close($con);
    }}
?>

<?php
    // bei register_globals = Off
    $PHP_SELF = $_SERVER['PHP_SELF'];
	
	if(isset($_POST['action'])){
    if($_POST['action'] == "RouteSend"){
    
	    //Empfänger
	    $to  = 'hello@val-air.com' . ', ';
    
	    //Email-Adresse Interessent
    	$route = $_POST['route'];
    
    	// Betreff
	    $subject = 'Neuer Routenvorschlag bei ValAir';
    
	    // Nachricht
	    $message = '
	    <html>
	    <head>
	    <title>Neuer Routenvorschlag bei ValAir</title>
	    </head>
	    <body>
	    <p>Es wurde eine neue Route vorgeschlagen:</p>
	    <table>
	    <tr>
	    <th>Route</th><th>'.$route.'</th>
	    </tr>
	    </table>
    	</body>
    	</html>
  	  ';
    
    	// Um HTML Mails zu versenden, muss der Content Type gesetzt sein
	    $headers  = 'MIME-Version: 1.0' . "\r\n";
	    $headers .= 'From: neue Route ValAir <route@val-air.com>' . "\r\n";
    	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
	    // Mail it
    	mail($to, $subject, $message, $headers);
		
		// Datenbank Eintrag erstellen
		$con = mysql_connect("localhost","bamboojet","Berlin123");
		mysql_select_db("valair_DB", $con);
		$sql="INSERT INTO routes(route) VALUES('$route')";
		mysql_query( $sql, $con );
		mysql_close($con);
	}}
?>

<?php
    // bei register_globals = Off
    $PHP_SELF = $_SERVER['PHP_SELF'];
	
	if(isset($_POST['action'])){
    if($_POST['action'] == "ContactSend"){
    
	    //Empfänger
	    $to  = 'hello@val-air.com' . ', ';
    
	    //Email-Adresse Interessent
    	$name = $_POST['name'];
    	$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		
    	// Betreff
	    $subject = 'Neue Kontaktanfrage bei ValAir von '.$name;
    
	    // Nachricht
	    $message = '
	    <html>
	    <head>
	    </head>
	    <body>
	    <table>
	    <tr>
	    <th>Betreff</th><th>'.$subject.'</th>
	    </tr>
	    <tr>
	    <th>Name</th><th>'.$name.'</th>
	    </tr>
	    <tr>
	    <th>E-Mail</th><th>'.$email.'</th>
	    </tr>
	    <tr>
	    <th>Nachricht</th><th>'.$message.'</th>
	    </tr>
	    </table>
    	</body>
    	</html>
  	  ';
    
    	// Um HTML Mails zu versenden, muss der Content Type gesetzt sein
	    $headers  = 'MIME-Version: 1.0' . "\r\n";
	    $headers .= 'From: <contact@val-air.com>' . "\r\n";
    	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
	    // Mail it
    	mail($to, $subject, $message, $headers);
	}}
?>

</html>