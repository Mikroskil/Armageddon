<?php

include "../../koneksi/database.php";

$email = $_POST['email'];

$data = mysql_query("SELECT * FROM member WHERE emailmember='$email'");
$d = mysql_fetch_assoc($data);

//checking weather user exists or not in $existing_users array
if (!empty($d))	
{
	//user name is not availble
	echo "no";
}
else
{
	//user name is available
	echo "yes";
}

?>