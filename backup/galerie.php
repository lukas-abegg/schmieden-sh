<style type="text/css">
<!--
.style7 {font-family: Arial, Helvetica, sans-serif}
--->
</style>
<table align="left" valign="top" border="0" width="610">
	<tr>
		<td colspan="4"> <span style="font-family: Arial; font-size: 16px; color: white;">
		Intern >></span> 
		<span style="font-family: Arial; font-size: 25px; color: white;">
		&nbsp;Galerie </span> <br>
		<br>
		</td>
	</tr>
	<tr>
		<td align="center">
		<br>
		<br>
			<?php
			if(!isset($_SESSION))
			{
				session_start();
			} 
    			$hostname = $_SERVER['HTTP_HOST'];
    			$path = dirname($_SERVER['PHP_SELF']);
    
    			if ( isset($_SESSION['vorstand']) || isset($_SESSION['zuenfter']) ) { 
			?>
				<em><a target="_blank" href="/intern/Zunft_Zun_Schmieden_Galerie/album/Galerie_Fotos/index.html">Link zur Fotogalerie</a></em>
			<?php }else{ ?>
				<div align="center" class="style6"><i><a href="index.php?section=familien&site=login">Dieser Bereich ist intern. <br> Bitte loggen Sie sich zuerst ein!</a></i></div>
			<?php } ?>
		</td>
	</tr>
</table>