<?php
session_start();



$bandid = $_POST['bandname'];
$size = $_POST['size'];
$styleid = $_POST['radiobutton'];

//echo $bandid . "<br />" . $size . "<br />" . $styleid . "<br />";

switch ($styleid)
{
	case 1:
		$style = "http://www.lifeundergroundtour.com/widgets/widgetCrusade.png";
		break;
	case 2:
		$style = "http://www.lifeundergroundtour.com/widgets/widgetTour.png";
		break;
}

switch ($size)
{
	case "350x263":
		$width = 350;
		$height = 263;
		break;
		
	case "150x113":
		$width = 150;
		$height = 113;
		break;
}



$info = "page.php?page=21&widgetcode=1&bandid=" . $bandid . "&styleid=" . $styleid . "&width=" . $width . "&hieght" . $height;

header("Location: $info");

/*
echo "<xmp><p><a href=\"http://www.bestofbands.com/band_profile.php?id=";
echo $bandid;
echo "\"><img src=\"";
echo $style;
echo "\" width=\"";
echo $width;
echo "\" height=\"";
echo $height;
echo "\" border=\"0\" /></a></p></xmp>";
*/


?>

