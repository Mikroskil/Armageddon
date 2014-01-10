<?php

$kodekontenpublik = $_GET['kodekontenpublik'];

if($kodekontenpublik=='produk')
{
	include "kontenpublik/produkpublik.php";
}
else if($kodekontenpublik=='carapembelian')
{
	include "kontenpublik/carapembelianpublik.php";
}
else if($kodekontenpublik=='tentangkami')
{
	include "kontenpublik/tentangkamipublik.php";
}
else if($kodekontenpublik=='memberarea')
{
	include "kontenpublik/memberareapublik.php";
}

else if($kodekontenpublik=='loginadmin')
{
	include "kontenpublik/loginadmin.php";
}

?>