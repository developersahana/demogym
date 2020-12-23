<?php

	$con=mysqli_connect("localhost","root","","gym");
	
	if(!$con)
	{
		echo "database not connected";
	}
?>