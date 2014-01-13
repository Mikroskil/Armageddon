<?php

include "../../koneksi/database.php";

$kodeproduk = $_POST['kodeproduk'];

$data = mysql_query("SELECT * FROM produk WHERE kodeproduk='$kodeproduk'");
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