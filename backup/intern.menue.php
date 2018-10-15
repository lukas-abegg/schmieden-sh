
<style type="text/css">
<!--
.style6 {font-style: italic; color: #FFFF00; font-family: Arial, Helvetica, sans-serif; font-size: 12px;}
-->
</style>
<table border="0" align="center">
	<tr align="center">
    <?php
    if(!isset($_SESSION))
	{
		session_start();
	}
    
    $hostname = $_SERVER['HTTP_HOST'];
    $path = dirname($_SERVER['PHP_SELF']);
    
    if (isset($_SESSION['vorstand']) || isset($_SESSION['zuenfter'])) {
    ?>
    <td valign="top"><div align="center" class="style6"><a href="index.php?section=intern&site=download">Zunftdokumente herunterladen</a></div></td>
    <?
		if (isset($_SESSION['vorstand'])) {
			?>
			<td valign="top"><div class="style6"><a href="#">&nbsp;| &nbsp;</a></div></td>
			<td height="17" valign="top">
			  <div align="center" class="style6"><a href="index.php?section=intern&site=upload">Zunftdokumente ersetzen</a></div></td>
			<?
		}
		?>
		<td valign="top"><div class="style6"><a href="#">&nbsp;| &nbsp;</a></div></td>
		<td valign="top"><div align="center" class="style6"><a href="index.php?section=intern&site=galerie">Galerie</a></div></td>
		<td valign="top"><div class="style6"><a href="#">&nbsp;| &nbsp;</a></div></td>
		<td valign="top"><div align="center" class="style6"><a href="../familien/logout.php">Logout</a></div></td>
		
	<?
	}
	?>
  	</tr>
	</table>
