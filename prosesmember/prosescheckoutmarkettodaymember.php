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

$tanggal = $_GET['tanggal'];
$kodepurchaseorder = $_GET['kodepurchaseorder'];
$emailmember = $_GET['emailmember'];
$detailprodukpurchase = $_GET['detailprodukpurchase'];
$totalpembayaran = $_GET['totalpurchasecheckout'];

$query = "INSERT INTO checkout (tanggal, kodepurchaseorder, emailmember, detailprodukpurchase, totalpembayaran) VALUES ('$tanggal','$kodepurchaseorder','$emailmember','$detailprodukpurchase','$totalpembayaran')";
mysql_query($query);
?>

<META HTTP-EQUIV=Refresh CONTENT='0; URL=../member.php?kodekontenmember=checkouthistory'>
<script type="text/javascript">
alert("Your Market Today has been Checkout...!!!")
</script>