<?php
	//make connection with database
	$link = mysqli_connect("sql307.epizy.com","epiz_26585844","8BfNYk159LIJBGC","epiz_26585844_nish");
	// Check connection
	if($link === false) {
    	die("ERROR: Could not connect. " . mysqli_connect_error());
	}
?>
