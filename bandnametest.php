<?php
include 'connect/queries.php';


echo "Test";
		$bandname = getbandnamestest();
		
		for ($i=0; $i<mysql_num_rows($bandname); $i++)
		{
		$row = mysql_fetch_assoc($bandname);
			
					echo $row[BandName];
			
		}		
		?>