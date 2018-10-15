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
<?php
     if($_SESSION){
		session_destroy();
	} 
     

     $hostname = $_SERVER['HTTP_HOST'];
     $path = dirname($_SERVER['PHP_SELF']);

     header('Location: ../../index.php?section=familien&site=login');
?>
       		</td>
	</tr>
</table>
