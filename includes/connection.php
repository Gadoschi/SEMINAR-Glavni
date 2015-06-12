<?php

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$db = 'tvzb';
	
	$conn =  mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to MySQL server');
	mysql_select_db($db);
	
?>