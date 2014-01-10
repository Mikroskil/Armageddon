<?php 

$kodekontenmember = $_GET['kodekontenmember'];

if($kodekontenmember=='produk')
{
	include "kontenmember/produkmember.php";
}
else if($kodekontenmember=='carapembelian')
{
	include "kontenmember/carapembelianmember.php";
}
else if($kodekontenmember=='tentangkami')
{
	include "kontenmember/tentangkamimember.php";
}


else if($kodekontenmember=='userprofile')
{
	include "kontenmember/userprofilemember.php";
}
else if($kodekontenmember=='markettoday')
{
	include "kontenmember/markettodaymember.php";
}
else if($kodekontenmember=='checkouthistory')
{
	include "kontenmember/checkouthistorymember.php";
}
else if($kodekontenmember=='addconfirmation')
{
	include "kontenmember/addconfirmationmember.php";
}
else if($kodekontenmember=='confirmationhistory')
{
	include "kontenmember/confirmationhistorymember.php";
}
else if($kodekontenmember=='barcodeview')
{
	include "kontenmember/barcodeviewmember.php";
}

?>