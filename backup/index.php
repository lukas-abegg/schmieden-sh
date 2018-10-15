<?php
	if(!isset($_SESSION))
	{
					session_start();
	} 
?>
<html>
<head>
<title>
Zunft zun Schmieden Schaffhausen
</title>
<link rel="icon" href="http://www.schmieden-sh.ch/icon.ico" type="image/x-icon" />
<style type="text/css">
a {
/* CSS-Formatierung */
display:block;
height:60px;
}
a img {
border : 0 none;
}
a#homee{
/* CSS-Foramtierung */
width:121px;
background-image:url(images/linkhome2.jpg);
}
a#zunfte{
/* CSS-Foramtierung */
width:121px;
background-image:url(images/linkzunft2.jpg);
}
a#vorstande{
/* CSS-Foramtierung */
width:121px;
background-image:url(images/linkvorstand2.jpg);
}
a#zunftlebene{
/* CSS-Foramtierung */
width:121px;
background-image:url(images/linkzunftleben2.jpg);
}
a#galeriee{
/* CSS-Foramtierung */
width:121px;
background-image:url(images/linkgalerie2.jpg);
}
a#familiene{
/* CSS-Foramtierung */
width:121px;
background-image:url(images/linkfamilien2.jpg);
}
a#linkse{
/* CSS-Foramtierung */
width:121px;
background-image:url(images/linklinks2.jpg);
}
a#silbere{
/* CSS-Foramtierung */
width:121px;
background-image:url(images/linksilber2.jpg);
}

a#homed{
/* CSS-Foramtierung */
width:121px;
background-image:url(images/linkhome1.jpg);
}
a#zunftd{
/* CSS-Foramtierung */
width:121px;
background-image:url(images/linkzunft1.jpg);
}
a#vorstandd{
/* CSS-Foramtierung */
width:121px;
background-image:url(images/linkvorstand1.jpg);
}
a#zunftlebend{
/* CSS-Foramtierung */
width:121px;
background-image:url(images/linkzunftleben1.jpg);
}
a#galeried{
/* CSS-Foramtierung */
width:121px;
background-image:url(images/linkgalerie1.jpg);
}
a#familiend{
/* CSS-Foramtierung */
width:121px;
background-image:url(images/linkfamilien1.jpg);
}
a#linksd{
/* CSS-Foramtierung */
width:121px;
background-image:url(images/linklinks1.jpg);
}
a#silberd{
/* CSS-Foramtierung */
width:121px;
background-image:url(images/linksilber1.jpg);
}

a#homed:hover {
/* CSS-Foramtierung */
width:121px;
background-image:url(images/linkhome2.jpg);
}
a#zunftd:hover {
/* CSS-Foramtierung */
width:121px;
background-image:url(images/linkzunft2.jpg);
}
a#vorstandd:hover {
/* CSS-Foramtierung */
width:121px;
background-image:url(images/linkvorstand2.jpg);
}
a#zunftlebend:hover {
/* CSS-Foramtierung */
width:121px;
background-image:url(images/linkzunftleben2.jpg);
}
a#galeried:hover {
/* CSS-Foramtierung */
width:121px;
background-image:url(images/linkgalerie2.jpg);
}
a#familiend:hover {
/* CSS-Foramtierung */
width:121px;
background-image:url(images/linkfamilien2.jpg);
}
a#linksd:hover {
/* CSS-Foramtierung */
width:121px;
background-image:url(images/linklinks2.jpg);
}
a#silberd:hover {
/* CSS-Foramtierung */
width:121px;
background-image:url(images/linksilber2.jpg);
}
.style3 {font-size: 12px; color: #FFFFFF; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.style5 {
	color: #FFCC00;
	font-style: italic;
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
</style>
</head>
<body bgcolor="#AF0000">
	<table border="0" align="center" cellpadding="0" cellspacing="0" valign="top">
		
<tr>
			<td align="center">
			<?php

			$header = rand(1,5);
			echo "<img src='images/header$header.jpg' width='980' height='212'>";
			
			?>
			</td>
		</tr>
		
		<tr>
			<td width="980" height="60" align="center"><table align="left" valign="top" border="0" width="397">
              <tr width="980">
				<td height="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td width="121" height="60"><?php
							if($_GET['section']=="home"){
								echo "<a href='index.php?section=home&site=home' id='homee'></a>";
							}else{
								echo "<a href='index.php?section=home&site=home' id='homed'></a>";
							}
							?></td>
                <td width="121" height="60"><?php
							if($_GET['section']=="zunft"){
								echo "<a href='index.php?section=zunft&site=zunft' id='zunfte'></a>";
							}else{
								echo "<a href='index.php?section=zunft&site=zunft' id='zunftd'></a>";
							}
							?></td>
                <td width="121" height="60"><?php
							if($_GET['section']=="vorstand"){
								echo "<a href='index.php?section=vorstand&site=vorstand_details' id='vorstande'></a>";
							}else{
								echo "<a href='index.php?section=vorstand&site=vorstand_details' id='vorstandd'></a>";
							}
							?></td>
                 <td width="121" height="60"><?php
							if($_GET['section']=="silber"){
								echo "<a href='index.php?section=silber&site=silber' id='silbere'></a>";
							}else{
								echo "<a href='index.php?section=silber&site=silber' id='silberd'></a>";
							}
							?></td>
              	<td width="121" height="60"><?php
							if($_GET['section']=="familien"){
								echo "<a href='index.php?section=familien&site=familien' id='familiene'></a>";
							}else{
								echo "<a href='index.php?section=familien&site=familien' id='familiend'></a>";
							}
							?></td>
                 <td width="121" height="60"><?php
							if($_GET['section']=="zunftleben"){
								echo "<a href='index.php?section=zunftleben&site=zunftleben' id='zunftlebene'></a>";
							}else{
								echo "<a href='index.php?section=zunftleben&site=zunftleben' id='zunftlebend'></a>";
							}
							?></td>
              	<td width="121" height="60"><?php
							if($_GET['section']=="links"){
								echo "<a href='index.php?section=links&site=links' id='linkse'></a>";
							}else{
								echo "<a href='index.php?section=links&site=links' id='linksd'></a>";
							}
							?></td>
              </tr>
            </table></td>
	  </tr>

		<tr>
			<td align="center" valign="top" height="37" width="980"><img src="images/main_header.jpg"></td>
	  </tr>
      <tr>
			<td align="middle" valign="top" width="980"><table width="980" border="0" cellpadding="0" cellspacing="0">
              <?php
				
										$file = $_GET['section'];
										$file2 = $_GET['site'];
										$file = "$file/$file.menue.php";
										
										if(file_exists($file) && $file2 != 'silber'){
											
              echo "<tr>
                <td background='images/main_back_left.jpg'  width='48' scope='col'>&nbsp;</td>
                <td bgcolor='#fd0100' width='637' scope='col'>";
				
				include $file;
				
										
				echo"					</td>
                <th background='images/main_back_middle.jpg' width='28' scope='col'>&nbsp;</th>
                <td bgcolor='#fd0100' width='209' scope='col'>&nbsp;</td>
                <td background='images/main_back_right.jpg' width='58' scope='col'>&nbsp;</td>
              </tr>";
			  };
			  ?>
              <tr>
                <td background="images/main_back_left.jpg" width="48">&nbsp;</td>
                <td bgcolor="#fd0100" width="637"><?php
				
										$file = $_GET['section'];
										$file2 = $_GET['site'];
										$file = "$file/$file2.php";
										
										if(file_exists($file)){
                                            include $file;
                                        }else{
											include "home.php";
										}
									?></td>
                <td background="images/main_back_middle.jpg" width="28">&nbsp;</td>
                <td width="209" valign="top" align="center" bgcolor="#fd0100"><?php include "news.php"; ?></td>
                <td background="images/main_back_right.jpg" width="58">&nbsp;</td>
              </tr>
            </table></td>
      </tr>
      <tr>
			<td align="middle" valign="top" height="37" width="980"><img src="images/main_foot.jpg"></td>
	  </tr>

	</table>
 </body>
</html>
