<?php
$today = getdate();
//print_r($today);

$min = $today['minutes'];
//echo $min . "<br />";
if ($min < 45)
{
//echo 'Less Than' . "<br />";
	$min = $min + 15;
}

elseif ($min == 45)
{
//echo 'Equal to' . "<br />";
	$today['hours'] = $today['hours'] + 1;
	$min = 00;
}

elseif ($min > 45)
{
//echo 'Greater than' . "<br />";
	$today['hours'] = $today['hours'] + 1;
	$rem = 60 - $today['minutes'];
	$rem = 15 - $rem;
	$min = $rem;
}

$today['minutes'] = $min;

print ("15 minutes from now: " . $today['year'] . "-" . $today['mon'] . "-" . $today['mday'] . "-" . $today['hours'] . "-" . $today['minutes']);
?>

