<?php
include 'connect/queries.php';

echo "Add to contest <br />";

$profileid = $_GET[profileid];

echo $profileid . "<br />";

$data = add2contest($profileid);

header("Location: page.php?page=700&pass=shannon")



?>