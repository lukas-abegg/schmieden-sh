<style type="text/css">
<!--
a {
	font-size: 12px;
	color: #FFFFFF;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FFFFFF;
}
a:hover {
	text-decoration: none;
	color: #FFCC00;
}
a:active {
	text-decoration: none;
	color: #FFCC00;
}
.style17 {font-family: Arial, Helvetica, sans-serif}
.style19 {font-size: 12px}
.style20 {color: #FFFFFF; font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
-->
</style>
</head>
<body style="background-color: rgb(175, 0, 0);">
<table valign="top" align=" border="0" width="615">
<tbody>
<tr>
<td width="100%"> <span style="font-family: Arial; font-size: 16px; color: white;">
Interner Bereich &gt;&gt; </span> <span style="font-family: Arial; font-size: 25px; color: white;">
Zunftdokumente herunterladen </span> <br>
    <?php
    if(!isset($_SESSION))
	{
		session_start();
	}

    $hostname = $_SERVER['HTTP_HOST'];
    $path = dirname($_SERVER['PHP_SELF']);

    if (!isset($_SESSION['vorstand']) && !isset($_SESSION['zuenfter']))
	{
               ?>
               <table align=" valign="top" border="0" width="615">
               <tr>
               <td>
               <a href="../familien/logout.php">Zugriff verweigert. Weiter zu Login</a>
               </td>
               </tr>
               </table>
               <?

    } else {
               ?>
               <table border="0" width="615">
               <tbody width="100%" colspan="2">
               <tr width="100%">
                <td width="100%" colspan="2" ><br>
                   <span style="font-family: Arial; font-size: 16px; color: white;"><em>
                   <b>Dokumente zu Zunftbot und Zunftausflug</b></em></span>
                </td>
               </tr>
               <tr width="100%">
                <td>
				<br>
                <div class="style20">Bestellschein Zunftwein: <em><a href="intern/downloads/Formular_Weinbestellung.pdf" target="_blank">Download
               Bestellschein Zunftwein</a></em></div>
                </td>
               </tr>
               <tr width="100%" >
                   <td>
                   <div class="style20">Anmeldung Zunftbot: <em><a href="intern/downloads/Anmeldung_Zunftbot.pdf" target="_blank">Download
               Anmeldung Zunftbot</a><em></div>
               </tr>
               <tr width="100%">
                   <td>
                   <div class="style20">Aufnahmegesuch Zunftbot: <em><a href="intern/downloads/Aufnahmegesuch_Bot.pdf" target="_blank">Download
               Aufnahmegesuch Zunftbot</a><em></div>
               </td>
               </tr>
               <tr width="100%">
                   <td>
                   <div class="style20">Anmeldung Herbstanlass:  <em><a href="intern/downloads/Herbstanlass.pdf" target="_blank">Download
               Anmeldung Zunftausflug</a></em></div>
               </td>
               </tr>
		<tr width="100%">
                   <td>
                   <div class="style20">Anmeldung Dreik&ouml;nigsumzug:  <em><a href="intern/downloads/Dreikoenigsumzug.pdf" target="_blank">Download
               Anmeldung Dreik&ouml;nigsumzug</a></em></div>
               </td>
		</tr>

                   <tr width="100%">
                   <td colspan="2"><br>
                   <span style="font-family: Arial; font-size: 16px; color: white;">
                   <em><b>Allgemeine Zunft-Dokumente</b></em></span>
                   </td>
                   </tr>
                   <tr width="100%">
                   <td>
				   <br>
                   <div class="style20">Teilrevision der Statuten:  <em><a href="intern/downloads/Revision_2012_Statuten.pdf" target="_blank">Download
                   Teilrevision der Statuten</a></em></div>
                   </td>
                   </tr>
                   <tr width="100%">
                   <td>
                   <div class="style20">Statuten inkl. historischem Anhang:  <em><a href="intern/downloads/Statuten.pdf" target="_blank">Download
                   Statuten inkl. historischem Anhang</a></em></div>
                   </td>
                   </tr>
                   <tr width="100%">
                   <td>
                   <div class="style20">Mitglieder des Zunftvorstandes:  <em><a href="intern/downloads/Vorstand.pdf" target="_blank">Download
                   Mitglieder des Zunftvorstandes</a></em></div>
                   </td>
                   </tr>
                   <tr width="100%">
                   <td>
                   <div class="style20">Anzahl Z&uuml;nfter: <em><a href="intern/downloads/Anzahl_Zuenfter.pdf" target="_blank">Download
                   Anzahl Z&uuml;nfter</a></em></div>
                   </td>
                   </tr>
                   <tr width="100%">
                   <td>
                   <div class="style20">Rodel:  <em><a href="intern/downloads/Rodel.pdf" target="_blank">Download
                   Rodel</a></em></div>
                   </td>
                   </tr>
                   <tr width="100%">
                   <td>
                   <div class="style20">Adressliste Rodel: <em><a href="intern/downloads/Adressliste_Rodel.pdf" target="_blank">Download
                   Adressliste</a></em></div>
                   </td>
                   </tr>
                   </tbody>
                   </table>
                   </td>
                   </tr>
               </table>
    <?
    }
    ?>
</body></html>
