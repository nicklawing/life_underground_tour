<?php

include 'connect/queries.php';

//echo "Admin Add";


echo "Currently Registered <br /><br />";
echo "<TABLE border=\"1\">";
echo "<tr>";
echo "<td>Band Name</td><td>BoB ID</td><td>VFM On Page</td><td>Add VFM Button</td></tr>";

//echo "</tr>";
//echo "</TABLE>";

$data = getallregistered();

for ($i=0; $i<mysql_num_rows($data); $i++)
		{
		$row = mysql_fetch_assoc($data);
			
					echo "<td>" . $row[bandname] . "</td><td>" . $row[bobprofileid] . "</td><td>"; 
						if($row[vfmicon] == 0)
							{
							echo "No";
							echo "</td><td>";
					        echo "<a href=\"add2contest.php?profileid=$row[bobprofileid]\">Add to contest</a>";
							echo "</td></tr>";
							}
						if($row[vfmicon] == 1)
							{
							echo "Yes";
							echo "</td><td>";
							echo "</td></tr>";
							}

					}


echo "</TABLE>";

?>
