<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-size: 14px;
	font-weight: bold;
}
.style5 {color: #FFFFFF; font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
.style7 {
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
a {
	font-family: Arial, Helvetica, sans-serif;
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
.style8 {color: #FFFFFF}
.style9 {color: #FFFFFF; font-size: 14px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.style10 {font-family: Arial, Helvetica, sans-serif}
-->
</style>

<?php
     if(!isset($_SESSION))
	{
		session_start();
	}

     $hostname = $_SERVER['HTTP_HOST'];
     $path = dirname($_SERVER['PHP_SELF']);

     if (!isset($_SESSION['vorstand'])) {
?>
<table align="left" valign="top" border="0" width="615">
	<tr>
		<td>
      <a href="../familien/logout.php">Zugriff verweigert. Weiter zu Login</a>
       		</td>
	</tr>
</table>
<?

      } else {
?>

<table align="left" valign="top" border="0" width="615">
	<tr>
		<td>
		<span style="font-family:Arial; font-size:16;color:white">
		Intern >></span>
		<span style="font-family:Arial; font-size:25;color:white">
		 Zunftdokumente ersetzen
		</span>
		<br>
        		<span style="font-family:Arial;font-size:12;color:white">

<br><br><br>
          <i>Du kannst jedes der aufgelisteten PDF-Dokumente ersetzen. Klicke dazu beim gew&uuml;nschten PDF-Dokument auf "Durchsuchen" und w&auml;hle auf deinem Computer aus das neu hochzuladene Dokument aus, und klicke auf "Datei hochladen".</i>
          
          
          <br><br>
          <b>!! Bitte benutzt beim Upload keine Dateinamen mit Umlauten. !!</b>

		</span>
		
       	</td>
          
	</tr>
          <tr width="100%">
          <td width="100%" colspan="2" ><br>
          <span style="font-family: Arial; font-size: 16px; color: white;">
          <em>Dokumente zu Zunftbot und Zunftausflug</em></span>
          </td>
          </tr>
          
          <tr width="100%">
          <td><br><span style="font-family: Arial; font-size: 12px; color: white;">
          <div class="style20">- Bestellschein Zunftwein: </div></span>
          </td>
          <td><br>
          <div class="style20"><span style="font-family: Arial; font-size: 12px; color: white;">
<form enctype="multipart/form-data" action="index.php?section=intern&site=uploader_bestellschein_zunftwein" method="POST">
          <input type="hidden" name="MAX_FILE_SIZE" value="1000000000" />
          Bestellschein Zunftwein auf Computer ausw&auml;hlen: <br><input name="uploadedfile" type="file" />
          <br><input type="submit" value="Datei hochladen" /></form>
</div>
          </td>
          </tr>
          
          <tr width="100%">
          <td><br><span style="font-family: Arial; font-size: 12px; color: white;">
          <div class="style20">- Anmeldung Zunftbot: </div></span>
          </td>
          <td><br>
          <div class="style20"><span style="font-family: Arial; font-size: 12px; color: white;">
          <form enctype="multipart/form-data" action="index.php?section=intern&site=uploader_anmeldung_zunftbot" method="POST">
          <input type="hidden" name="MAX_FILE_SIZE" value="1000000000" />
          Anmeldung Zunftbot auf Computer ausw&auml;hlen: <br><input name="uploadedfile" type="file" />
          <br><input type="submit" value="Datei hochladen" /></form>
          </div>
          </td>
          </tr>
          
          <tr width="100%">
          <td><br><span style="font-family: Arial; font-size: 12px; color: white;">
          <div class="style20">- Aufnahmegesuch Zunftbot: </div></span>
          </td>
          <td><br>
          <div class="style20"><span style="font-family: Arial; font-size: 12px; color: white;">
          <form enctype="multipart/form-data" action="index.php?section=intern&site=uploader_aufnahmegesuch_zunftbot" method="POST">
          <input type="hidden" name="MAX_FILE_SIZE" value="1000000000" />
          Aufnahmegesuch Zunftbot auf Computer ausw&auml;hlen: <br><input name="uploadedfile" type="file" />
          <br><input type="submit" value="Datei hochladen" /></form>
          </div>
          </td>
          </tr>
          
          <tr width="100%">
          <td><br><span style="font-family: Arial; font-size: 12px; color: white;">
          <div class="style20">- Anmeldung Herbstanlass: </div></span>
          </td>
          <td><br>
          <div class="style20"><span style="font-family: Arial; font-size: 12px; color: white;">
          <form enctype="multipart/form-data" action="index.php?section=intern&site=uploader_anmeldung_herbstanlass" method="POST">
          <input type="hidden" name="MAX_FILE_SIZE" value="1000000000" />
          Anmeldung Herbstanlass auf Computer ausw&auml;hlen: <br><input name="uploadedfile" type="file" />
          <br><input type="submit" value="Datei hochladen" /></form>
          </div>
          </td>
          </tr>

	<tr width="100%">
          <td><br><span style="font-family: Arial; font-size: 12px; color: white;">
          <div class="style20">- Anmeldung Dreik&ouml;nigsumzug: </div></span>
          </td>
          <td><br>
          <div class="style20"><span style="font-family: Arial; font-size: 12px; color: white;">
          <form enctype="multipart/form-data" action="index.php?section=intern&site=uploader_anmeldung_dreikoenigsumzug" method="POST">
          <input type="hidden" name="MAX_FILE_SIZE" value="1000000000" />
          Anmeldung Dreik&ouml;nigsumzug auf Computer ausw&auml;hlen: <br><input name="uploadedfile" type="file" />
          <br><input type="submit" value="Datei hochladen" /></form>
          </div>
          </td>
          </tr>
          
          <tr width="100%">
          <td colspan="2"><br>
          <span style="font-family: Arial; font-size: 16px; color: white;">
          <em>Allgemeine Zunft-Dokumente</em></span>
          </td>
          </tr>
          
          <tr width="100%">
          <td><br><span style="font-family: Arial; font-size: 12px; color: white;">
          <div class="style20">- Teilrevision der Statuten: </div></span>
          </td>
          <td><br>
          <div class="style20"><span style="font-family: Arial; font-size: 12px; color: white;">
          <form enctype="multipart/form-data" action="index.php?section=intern&site=uploader_revision_statuten" method="POST">
          <input type="hidden" name="MAX_FILE_SIZE" value="1000000000" />
          Teilrevision der Statuten auf Computer ausw&auml;hlen: <br><input name="uploadedfile" type="file" />
          <br><input type="submit" value="Datei hochladen" /></form>
          </div>
          </td>
          </tr>
          
          <tr width="100%">
          <td><br><span style="font-family: Arial; font-size: 12px; color: white;">
          <div class="style20">- Statuten inkl. historischem Anhang: </div></span>
          </td>
          <td><br>
          <div class="style20"><span style="font-family: Arial; font-size: 12px; color: white;">
          <form enctype="multipart/form-data" action="index.php?section=intern&site=uploader_statuten" method="POST">
          <input type="hidden" name="MAX_FILE_SIZE" value="1000000000" />
          Statuten auf Computer ausw&auml;hlen: <br><input name="uploadedfile" type="file" />
          <br><input type="submit" value="Datei hochladen" /></form>
          </div>
          </td>
          </tr>
          
          <tr width="100%">
          <td><br><span style="font-family: Arial; font-size: 12px; color: white;">
          <div class="style20">- Mitglieder des Zunftvorstandes: </div></span>
          </td>
          <td><br>
          <div class="style20"><span style="font-family: Arial; font-size: 12px; color: white;">
          <form enctype="multipart/form-data" action="index.php?section=intern&site=uploader_vorstand" method="POST">
          <input type="hidden" name="MAX_FILE_SIZE" value="1000000000" />
          Mitglieder des Zunftvorstandes auf Computer ausw&auml;hlen: <br><input name="uploadedfile" type="file" />
          <br><input type="submit" value="Datei hochladen" /></form>
          </div>
          </td>
          </tr>
          
          <tr width="100%">
          <td><br><span style="font-family: Arial; font-size: 12px; color: white;">
          <div class="style20">- Anzahl Z&uuml;nfter: </div></span>
          </td>
          <td><br>
          <div class="style20"><span style="font-family: Arial; font-size: 12px; color: white;">
          <form enctype="multipart/form-data" action="index.php?section=intern&site=uploader_anzahl_zuenfter" method="POST">
          <input type="hidden" name="MAX_FILE_SIZE" value="1000000000" />
          Anzahl Z&uuml;nfter auf Computer ausw&auml;hlen: <br><input name="uploadedfile" type="file" />
          <br><input type="submit" value="Datei hochladen" /></form>
          </div>
          </td>
          </tr>
          
          <tr width="100%">
          <td><br><span style="font-family: Arial; font-size: 12px; color: white;">
          <div class="style20">- Rodel: </div></span>
          </td>
          <td><br>
          <div class="style20"><span style="font-family: Arial; font-size: 12px; color: white;">
          <form enctype="multipart/form-data" action="index.php?section=intern&site=uploader_rodel" method="POST">
          <input type="hidden" name="MAX_FILE_SIZE" value="1000000000" />
          Rodel auf Computer ausw&auml;hlen: <br><input name="uploadedfile" type="file" />
          <br><input type="submit" value="Datei hochladen" /></form>
          </div>
          </td>
          </tr>

	<tr width="100%">
          <td><br><span style="font-family: Arial; font-size: 12px; color: white;">
          <div class="style20">- Adressliste Rodel: </div></span>
          </td>
          <td><br>
          <div class="style20"><span style="font-family: Arial; font-size: 12px; color: white;">
          <form enctype="multipart/form-data" action="index.php?section=intern&site=uploader_adressliste_rodel" method="POST">
          <input type="hidden" name="MAX_FILE_SIZE" value="1000000000" />
          Adressliste Rodel auf Computer ausw&auml;hlen: <br><input name="uploadedfile" type="file" />
          <br><input type="submit" value="Datei hochladen" /></form>
          </div>
          </td>
          </tr>
          
</table>

<?
}
?>