<?php
session_start();

if(!isset($_SESSION['emailmember'])){
		die("
		<script type='text/javascript'>
		alert('Sorry, You must Login before Access...!!!')
		</script>
		
		<META HTTP-EQUIV=Refresh CONTENT='0; URL=publik.php?kodekontenpublik=memberarea&title=Member Area'>
		"); }

include "../koneksi/database.php";

$transferbank = $_POST['viatransfer'];
$anbank = $_POST['antransfer'];
$detailpesantransfer = $_POST['detailmessagetransfer'];
$tanggalpurchaseorder = $_POST['tanggal'];
$kodepurchaseorder = $_POST['kodepurchaseorder'];
$statusadmin = "notvalid";
$statusorderreceived = "notvalid";
$barcode = "$tanggalpurchaseorder $kodepurchaseorder $emailmember";

$query=mysql_query ("SELECT * FROM checkout WHERE emailmember='$emailmember' AND tanggal='$tanggalpurchaseorder' AND kodepurchaseorder='$kodepurchaseorder'",$connection)or die(mysql_error());
$jumlah = mysql_num_rows($query); 
while ($row=mysql_fetch_array($query)) { 
$hasildetailpurchaseorder = $row['detailprodukpurchase'];
}

$detailpurchaseorder = "$hasildetailpurchaseorder";


$query = "INSERT INTO confirmation (transferbank, anbank, detailpesantransfer, tanggalpurchaseorder, kodepurchaseorder, statusadmin, barcode, emailmember, statusorderreceived, detailpurchaseorder) VALUES ('$transferbank','$anbank','$detailpesantransfer','$tanggalpurchaseorder','$kodepurchaseorder','$statusadmin','$barcode','$emailmember','$statusorderreceived', '$detailpurchaseorder')";
mysql_query($query);
?>

<META HTTP-EQUIV=Refresh CONTENT='0; URL=../member.php?kodekontenmember=confirmationhistory'>
<script type="text/javascript">
alert("Your Purchase Order has been Confirmation...!!!")
</script>