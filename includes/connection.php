<?php

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '123';
	$db = 'tvzb';
	
	$conn =  mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die ('Error connecting to MySQL server');
	
?>