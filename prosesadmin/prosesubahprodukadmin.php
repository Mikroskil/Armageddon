<?php
session_start();

if(!isset($_SESSION['username'])){
		die("
		<script type='text/javascript'>
		alert('Sorry, You must Login before Access...!!!')
		</script>
		
		<META HTTP-EQUIV=Refresh CONTENT='0; URL=administrator/'>
		"); }
?>

<?php
$iddataproduk = $_GET['iddataproduk'];

include "../koneksi/database.php";

$kodeproduk = $_POST['kodeproduk'];
$namaproduk = $_POST['namaproduk'];
$hargaproduk = $_POST['hargaproduk'];
$detailproduk = $_POST['detailproduk'];

$query = "UPDATE produk SET kodeproduk='$kodeproduk',namaproduk='$namaproduk',hargaproduk='$hargaproduk',detailproduk='$detailproduk' WHERE
iddata='$iddataproduk'";
mysql_query($query);
?>

<META HTTP-EQUIV=Refresh CONTENT='0; URL=../admin.php?kodekontenadmin=semuaproduk'>

<script type="text/javascript">
alert("Product Data has been changed...!!!")
</script>