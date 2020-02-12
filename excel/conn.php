<?php
	$conn = new mysqli('localhost', 'root', '', 'lms');
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>