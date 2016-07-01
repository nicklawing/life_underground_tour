<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php session_start(); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Life Underground Tour</title>
<style type="text/css">
<!--
body {
	background-color: #000000;
}
#content-main {
	background-image: url(Images/bg_content.png);
	background-repeat: repeat-y;
	padding: 0px;
	border-top-width: 0px;
	border-right-width: 0px;
	border-bottom-width: 0px;
	border-left-width: 0px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	position: relative;
	left: auto;
	top: auto;
	width: 500px;
	max-height: 325px;
	overflow: auto;
	visibility: visible;
	float: none;
	margin: 0px;
}
body,td,th {
	color: #FFFFFF;
}
#content-top {
	background-image: url(Images/bg_content-header.png);
	background-repeat: no-repeat;
	margin: 0px;
	padding: 0px;
	height: 40px;
	border-top-width: 0px;
	border-right-width: 0px;
	border-bottom-width: 0px;
	border-left-width: 0px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	position: relative;
	visibility: visible;
	width: 500px;
}
#content-foot {
	background-image: url(Images/bg_content-footer.png);
	background-repeat: no-repeat;
	height: 18px;
	margin-top: 0px;
	position: relative;
	width: 500px;
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
    <td height="480" colspan="2" align="center" valign="top"><br /><br />
      <div id="content-top" align="left">
	  <?php
	  $page = $_GET['page'];
	
	switch ($page)
	{
	case 1: 
		echo "<img src=\"Images/btn_what-is-lut.png\" width=\"120\" height=\"40\" />";
		break;
	case 2:
		echo "<img src=\"Images/btn_regions.png\" width=\"120\" height=\"40\" />";
		break;
	case 3:
		echo "<img src=\"Images/btn_register.png\" width=\"120\" height=\"40\" />";
		break;
	case 4:
		echo "<img src=\"Images/btn_contest-rules.png\" width=\"120\" height=\"40\" />";
		break;
	case 5:
		echo "<img src=\"Images/btn_sponsorship.png\" width=\"120\" height=\"40\" />";
		break;
	case 6:
		echo "<img src=\"Images/btn_newsletter.png\" width=\"120\" height=\"40\" />";
		break;
	case 7:
		echo "<img src=\"Images/btn_contact-us.png\" width=\"120\" height=\"40\" />";
		break;
	default: 
		echo "<img src=\"Images/btn_what-is-lut.png\" width=\"120\" height=\"40\" />";
		break;
	}	
	  ?>
	  </div>
	  <div id="content-main" align="left">

        <?php	
	//$page = $_GET['page'];
	
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
	default: 
		include ('whatis.php');
		break;
	}	
?>

</div>
<div id="content-foot"></div>
	
<p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="150" height="20">&nbsp;</td>
    <td height="20" colspan="2"><div align="center">Life Underground Tour is a division of Best of Bands, LLC - Copyright 2008 </div></td>
  </tr>
</table>
</body>
</html>
