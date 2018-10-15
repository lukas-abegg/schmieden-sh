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
<table align="left" valign="top" border="0" width="615">
	<tr>
		<td>
		<span style="font-family:Arial; font-size:16;color:white">
		Intern >>Login		</span>
		<span style="font-family:Arial; font-size:25;color:white">
		&nbsp;
		</span>
		<br>
<br><br>		
<span style="font-family:Arial; font-size:12;color:white">
<?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		 if(!isset($_SESSION))
			{
			session_start();
			} 

      $username = $_POST['username'];
      $passwort = $_POST['passwort'];

      $hostname = $_SERVER['HTTP_HOST'];
      $path = dirname($_SERVER['PHP_SELF']);

      // Vorstand Benutzername und Passwort werden überprüft
      if ($username == 'Vorstand2014' && $passwort == '20VorstandSchmied14') {
          $_SESSION['vorstand'] = true;
          
       // Weiterleitung zur geschützten Startseite
       ?>
		<table border="0" align="center">
			<tr align="center">
				<td height="17" valign="top" width="300">
				  <div align="center" class="style6"><a href="index.php?section=intern&site=download">Login erfolgreich. Weiter zum internen Bereich</a></div></td>
		  </tr></table> 
		<?
       }else{
         
         // Zuenfter Benutzername und Passwort werden ueberprŸft
         if ($username == 'Zuenfter2014' && $passwort == '20ZuenfterSH14') {
             $_SESSION['zuenfter'] = true;
             
             // Weiterleitung zur geschützten Startseite
             ?>
             <table border="0" align="center">
             <tr align="center">
             <td height="17" valign="top" width="300">
             <div align="center" class="style6"><a href="index.php?section=intern&site=download">Login erfolgreich. <br>Weiter zum internen Bereich</a></div></td>
             </tr></table>
             <?
         }else{
             ?>
             <table border="0" align="center">
             <tr align="center">
             <td height="17" valign="top" width="300">
             <div align="center" class="style6"><a href="index.php?section=familien&site=login">Benutzer oder Passwort falsch. <br>Bitte versuche dich nochmals einzuloggen!</a></div></td>
             </tr></table> 
             <?
         }
       }
    }
?>
</span>
      </td>
	</tr>
</table>
