<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Life Underground Tour</title>
<style type="text/css">
<!--
body {
	background-color: #000000;
}
body,td,th {
	color: #FFFFFF;
}
#content {
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #000000;
	overflow: auto;
	position: absolute;
	float: none;
	width: 380px;
	background-position: left top;
	background-repeat: no-repeat;
	margin-top: 2px;
	margin-right: 50px;
	margin-bottom: 2px;
	margin-left: 50px;
	border-top-width: 10px;
	border-right-width: 10px;
	border-bottom-width: 10px;
	border-left-width: 10px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	padding-top: 15px;
	padding-right: 20px;
	padding-bottom: 20px;
	padding-left: 30px;
	left: 250px;
	top: 150px;
}
#content #content-top {
	background-image: url(Images/bg_content-header.png);
	background-repeat: no-repeat;
}
#content #content-top #content-main {
	background-image: url(Images/bg_content.png);
	background-repeat: repeat;
}
#content #content-top #content-main #content-foot {
	background-image: url(Images/bg_content-footer.png);
	background-repeat: no-repeat;
}
-->
</style>
</head>

<body>
<table width="800" height="466" border="0" align="left" cellpadding="0" cellspacing="0" background="Images/bg.gif">
  <tr>
    <td width="150" height="100"><div align="center"></div></td>
    <td width="500" height="100"><div align="center"><img src="Images/lut_title.png" alt="Life Underground Tour" width="446" height="47" longdesc="http://www.lifeundergroundtour.com" /></div></td>
    <td width="150" height="100"><div align="center"></div></td>
  </tr>
  <tr>
    <td width="150" height="480" valign="top">
	  <p><br />
	    <?php
	include 'nav.php';	
	
	?>
	  </p>
    <p>&nbsp;	      </p></td>
    <td height="480" colspan="2" align="center" valign="middle"><br />
      <div id="content" align="left">
	  <div id="content-top">
	  <div id="content-main">
	  <div id="content-foot">
        <?php	
	$page = $_GET['page'];
	
	switch ($page)
	{
	case 1: 
		include ('whatis.php');
		break;
	case 2:
		include ('regions.php');
		break;
	case 3:
		include ('register.php');
		break;
	case 4:
		include ('rules.php');
		break;
	case 5:
		include ('sponsorship.php');
		break;
	case 6:
		include ('newsletter.php');
		break;
	case 7:
		include ('contactus.php');
		break;
	}	
?>
</div>
</div>
</div>
</div>	
<p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="150" height="20">&nbsp;</td>
    <td height="20" colspan="2"><div align="center">Life Underground Tour is a division of Best of Bands, LLC - Copyright 2008 </div></td>
  </tr>
</table>
</body>
</html>
