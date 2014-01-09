<?php
	$db_hostname="localhost";
	$db_username="root";
	$db_password="12345";
	$db_name="armageddon";
	
	
		//global $db_hostname, $db_username, $db_password, $db_name;
		$connection = mysql_connect($db_hostname, $db_username,  $db_password);
		mysql_select_db($db_name);
	
?>