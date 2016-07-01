<?php

$version = substr($_SERVER['HTTP_USER_AGENT'], 25, 8);
if ($version == "MSIE 6.0")
	{
	header("Location: view.php");
	
	}
	
?>

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
	max-height: 310px;
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
	height: 40px;
	margin-top: 0px;
	position: relative;
	width: 500px;
}
#main {
	background-repeat: no-repeat;
}
a:link {
	color: #FFFFFF;
}

a:visited {
	color: #CCCCCC;
}


a:hover {
	color: #CCCCCC;
}

a:active {
	color: #CCCCCC;
}
-->
</style>
</head>

<body>
<table width="800" height="466" border="0" align="left" cellpadding="0" cellspacing="0" background="Images/bg.gif" id="main">
  <tr>
    <td width="150" height="100"><div align="center"><a href="http://www.bestofbands.com" target="_blank"><img src="Images/BoBPresents.png" alt="Best of Bands" width="150" height="113" border="0" longdesc="http://www.bestofbands.com" /></a></div></td>
    <td width="500" height="100"><div align="center"><img src="Images/lut_title.png" alt="Life Underground Tour" width="446" height="47" longdesc="http://www.lifeundergroundtour.com" /></div></td>
    <td width="150" height="100"><div align="center"></div></td>
  </tr>
  <tr>
    <td width="150" height="480" valign="top">
	  <p>
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
	case 51:
		echo "<img src=\"Images/btn_viewsponsors.png\" width=\"120\" height=\"40\" />";
		break;
	case 52:
		echo "<img src=\"Images/btn_wanttobeasponsor.png\" width=\"120\" height=\"40\" />";
		break;
	case 53:
		echo "<img src=\"Images/btn_affiliates.png\" width=\"120\" height=\"40\" />";
		break;
	case 6:
		echo "<img src=\"Images/btn_downloads.png\" width=\"120\" height=\"40\" />";
		break;
	case 7:
		echo "<img src=\"Images/btn_contact-us.png\" width=\"120\" height=\"40\" />";
		break;
	case 8:
		echo "<img src=\"Images/btn_faq.png\" width=\"120\" height=\"40\" />";
		break;
	case 9:
		echo "<img src=\"Images/btn_updates.png\" width=\"120\" height=\"40\" />";
		break;
	case 20:
		echo "<img src=\"Images/btn_dmc.png\" width=\"120\" height=\"40\" />";
		break;	
	case 21:
		echo "<img src=\"Images/btn_widgets.png\" width=\"120\" height=\"40\" />";
		break;	
	case 30:
		echo "<img src=\"Images/btn_news.png\" width=\"120\" height=\"40\" />";
		break;
	case 31:
		echo "<img src=\"Images/btn_tylersblog.png\" width=\"120\" height=\"40\" />";
		break;
	case 1001:
		echo "<img src=\"Images/btn_news.png\" width=\"120\" height=\"40\" />";
		break;
	case 1002:
		echo "<img src=\"Images/btn_news.png\" width=\"120\" height=\"40\" />";
		break;
	case 71:
		echo "<img src=\"Images/btn_thankyou.png\" width=\"120\" height=\"40\" />";
		break;
	case 700:
		echo "<img src=\"Images/btn_admin.png\" width=\"120\" height=\"40\" />";
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
		$printme = 1;
		$print = 'whatis.php';
		break;
	case 2:
		include ('regions.php');
		$printme = 0;
		break;
	case 3:
		include ('register.php');
		$printme = 0;
		break;
	case 35:
		include ('sendcheck.php');
		$printme = 1;
		$print = 'sendcheck.php';
		break;
	case 36:
		include ('paycreditmanual.php');
		$printme = 0;
		echo "<script> window.open(\"paycredit.php\");</script>";
		break;
	case 4:
		include ('rules.php');
		$printme = 1;
		$print = 'rules.php';
		break;
	case 5:
		include ('sponsorship.php');
		$printme = 1;
		$print = 'sponsorship.php';
		break;
	case 51:
		include ('viewsponsors.php');
		$printme = 0;
		break;
	case 52:
		include ('wanttobeasponsor.php');
		$printme = 0;
		break;
	case 53:
		include ('affiliates.php');
		$printme = 0;
		break;
	case 6:
		include ('downloads.php');
		$printme = 0;
		break;
	case 7:
		include ('contactus.php');
		$printme = 0;
		break;
	case 8:
		include('faq.php');
		$printme = 1;
		$print = 'faq.php';
		break;
	case 9:
		include('updates.php');
		$printme = 0;
		break;
	case 20:
		include('dmc.php');
		break;
	case 21:
		include('widgets.php');
		break;
	case 30:
		include('news.php');
		break;
	case 31:
		include('tylersblog.php');
		break;
	case 1001:
		include('pr1001.php');
		break;
	case 1002:
		include('pr1002.php');
		break;
	case 71:
		include('thankyou.php');
		break;
	case 700:
		$admin = $_GET['pass'];
		if ($admin == "shannon")
			{include ('AdminAdd.php');}
		else 
			{include ('whatis.php');}
		break;			
	default: 
		include ('whatis.php');
		break;
	}	
?>

</div>
<div id="content-foot">
  <div align="right">
    <?php
if ($printme == 1)
{
echo "<a href=\"$print\", target=\"_blank\"><img src=\"Images/btn_printme.png\" width=\"120\" height=\"40\" border=\"0\" /></a>";
}
?>
  </div>
</div>
	
<p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="150" height="20">&nbsp;</td>
    <td height="20" colspan="2"><div align="center">Life Underground Tour is a division of Best of Bands, LLC - Copyright 2008 </div></td>
  </tr>
</table>

<p><img src="Images/spacer_20px.gif" width="20" height="40" /></p>
<p><img src="Images/spacer_20px.gif" width="20" height="40" /></p>
<p><img src="Images/spacer_20px.gif" width="20" height="40" /></p>
<p><a href="http://www.officialmetalcastle.com" target="_blank"><img src="Images/Sponsor_OMC.jpg" alt="Official Metal Castle" width="400" height="128" border="0" longdesc="http://www.myspace.com/theofficialmetalcastle" /></a></p>
<p><a href="http://www.musicfortroops.com" target="_blank"><img src="Images/Sponsor_MFT.jpg" alt="Music For Troops" border="0" longdesc="http://http://www.musicfortroops.com/" /></a></p>
<p><a href="http://desktopmusicchannel.com.s25384.gridserver.com/musicians-wanted/" target="_blank"><img src="Images/dmc.jpg" alt="Desktop Music Channel" width="120" height="90" border="0" longdesc="http://www.desktopmediachannel.com/" /></a></p>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-1537962-3");
pageTracker._trackPageview();
</script>
</body>
</html>
