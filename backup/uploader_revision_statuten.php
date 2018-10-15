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

     if (!isset($_SESSION['vorstand']) || !$_SESSION['vorstand']) {
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
		Intern >>		</span>
		<span style="font-family:Arial; font-size:25;color:white">
		Teilrevision Statuten 
		</span>
		<br>
<br><br>		
		<?php
          $path = dirname(__FILE__);
          $target_path = $path."/downloads/Revision_2012_Statuten.pdf";

 if (($_FILES["uploadedfile"]["type"] == "application/pdf"))
{

 if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path))
 	{
		echo '<span style="font-family:Arial; font-size:12;color:white">Datei erfolgreich ersetzt.</span>';
	}else{
		echo '<span style="font-family:Arial; font-size:12;color:white">Datei konnte nicht hochgeladen werden.</span>';
	}
}
	else
	{
echo '<span style="font-family:Arial; font-size:12;color:white">Datei ist von einem falschen Format.</span>';
}


?>
       		</td>
	</tr>
</table>
<?
}
?>