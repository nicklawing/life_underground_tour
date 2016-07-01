<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php

//echo $_SERVER['HTTP_USER_AGENT'];

//echo $_SERVER['HTTP_USER_AGENT'];
//echo $browser;

//echo "<br />";


$version = substr($_SERVER['HTTP_USER_AGENT'], 25, 8);
if ($version == "MSIE 6.0")
	{
	echo "IE 6 or below";
	
	}
	
else {echo "Main Site";}
//echo "<br />";

//echo $version;

//echo "<br />";

//$bv = strpbrk($_SERVER['HTTP_USER_AGENT'], ';');

//echo $bv;

//$browser = get_browser($_SERVER['HTTP_USER_AGENT']);
//echo($browser);


?>
</body>
</html>
