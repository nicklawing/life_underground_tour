<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Life Underground Tour Navigation</title>
</head>

<body>
<div><a href="page.php?page=1"><img src="Images/btn_what-is-lut.png" width="120" height="40" border="0" /></a></div>
<div><a href="page.php?page=8"><img src="Images/btn_faq.png" width="120" height="40" border="0" /></a></div>
<div><a href="page.php?page=9"><img src="Images/btn_updates.png" width="120" height="40" border="0" /></a></div>
<?php
$page = $_GET['page'];
if (in_array($page, array(9, 30, 31, 1001, 1002)))
{echo "<div><img src=\"Images/spacer_20px.png\" width=\"20\" height=\"40\" border=\"0\" /><a href=\"page.php?page=31\"><img src=\"Images/btn_tylersblog.png\" width=\"120\" height=\"40\" border=\"0\" /></a></div>

<div><img src=\"Images/spacer_20px.png\" width=\"20\" height=\"40\" border=\"0\" /><a href=\"page.php?page=30\"><img src=\"Images/btn_news.png\" width=\"120\" height=\"40\" border=\"0\" /></a></div>
";}
?>

<div><a href="page.php?page=3"><img src="Images/btn_register.png" width="120" height="40" border="0" /></a></div>
<div><a href="page.php?page=4"><img src="Images/btn_contest-rules.png" width="120" height="40" border="0" /></a></div>
<div><a href="page.php?page=5"><img src="Images/btn_sponsorship.png" width="120" height="40" border="0" /></a></div>
<?php
$page = $_GET['page'];
if (in_array($page, array(5, 51, 52, 53)))
{echo "<div><img src=\"Images/spacer_20px.png\" width=\"20\" height=\"40\" border=\"0\" /><a href=\"page.php?page=51\"><img src=\"Images/btn_viewsponsors.png\" width=\"120\" height=\"40\" border=\"0\" /></a></div><div><img src=\"Images/spacer_20px.png\" width=\"20\" height=\"40\" border=\"0\" /><a href=\"page.php?page=53\"><img src=\"Images/btn_affiliates.png\" width=\"120\" height=\"40\" border=\"0\" /></a></div><div><img src=\"Images/spacer_20px.png\" width=\"20\" height=\"40\" border=\"0\" /><a href=\"page.php?page=52\"><img src=\"Images/btn_wanttobeasponsor.png\" width=\"120\" height=\"40\" border=\"0\" /></a></div>";}
?>
<div><a href="http://www.lifeundergroundtour.com/phpBB3" target="_blank"><img src="Images/btn_forums.png" width="120" height="40" border="0" /></a></div>
<div><a href="page.php?page=6"><img src="Images/btn_downloads.png" width="120" height="40" border="0" /></a></div>
<?php
$page = $_GET['page'];
if (in_array($page, array(6, 20, 21)))
{echo "<div><img src=\"Images/spacer_20px.png\" width=\"20\" height=\"40\" border=\"0\" /><a href=\"page.php?page=20\"><img src=\"Images/btn_dmc.png\" width=\"120\" height=\"40\" border=\"0\" /></a></div><div><img src=\"Images/spacer_20px.png\" width=\"20\" height=\"40\" border=\"0\" /><a href=\"page.php?page=21\"><img src=\"Images/btn_widgets.png\" width=\"120\" height=\"40\" border=\"0\" /></a></div>";}
?>
<div><a href="page.php?page=7"><img src="Images/btn_contact-us.png" width="120" height="40" border="0" /></a></div>
</body>
</html>
