<?php 

$kodekontenadmin = $_GET['kodekontenadmin'];

if($kodekontenadmin=='login')
{
	include "kontenadmin/loginadmin.php";
}

else if($kodekontenadmin=='userprofile')
{
	include "kontenadmin/userprofileadmin.php";
}
else if($kodekontenadmin=='tambahproduk')
{
	include "kontenadmin/tambahprodukadmin.php";
}
else if($kodekontenadmin=='semuaproduk')
{
	include "kontenadmin/semuaprodukadmin.php";
}
else if($kodekontenadmin=='ubahproduk')
{
	include "kontenadmin/ubahprodukadmin.php";
}
else if($kodekontenadmin=='pencarianproduk')
{
	include "kontenadmin/pencarianprodukadmin.php";
}

else if($kodekontenadmin=='cekdanambilpurchaseordermember')
{
	include "kontenadmin/checktakepurchaseordermemberadmin.php";
}
else if($kodekontenadmin=='semuatidakterkonfirmasi')
{
	include "kontenadmin/semuatidakterkonfirmasiadmin.php";
}

else if($kodekontenadmin=='pencariandatakonfirmasi')
{
	include "kontenadmin/pencariandatakonfirmasiadmin.php";
}

else if($kodekontenadmin=='semuadatakonfirmasimember')
{
	include "kontenadmin/semuadatakonfirmasimemberadmin.php";
}

else if($kodekontenadmin=='semuadatacheckoutmember')
{
	include "kontenadmin/semuadatacheckoutmemberadmin.php";
}

else if($kodekontenadmin=='editpubliktentangkami')
{
	include "kontenadmin/edittentangkamiadmin.php";
}
else if($kodekontenadmin=='editpublikcarapembelian')
{
	include "kontenadmin/editcarapembelianadmin.php";
}

else if($kodekontenadmin=='semuadatapesanandiambilmember')
{
	include "kontenadmin/semuadatapesanandiambilmemberadmin.php";
}


?>