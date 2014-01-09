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

$kodeproduk = $_GET['kodeproduk'];
$emailmember = $_SESSION['emailmember'];
$tanggaltoday = date('d-m-Y');
$quantityorder = $_POST['quantityorder'];

$data = mysql_query("SELECT * FROM markettoday WHERE tanggal='$tanggaltoday' AND emailmember='$emailmember' AND kodeproduk='$kodeproduk'");
$d = mysql_fetch_assoc($data);

if (!empty($d))
{
?>

<META HTTP-EQUIV=Refresh CONTENT='0; URL=../member.php?kodekontenmember=produk'>
<script type="text/javascript">
alert("Sorry, Product has been added...!!!")
</script>

<?php
}
else
{

$query=mysql_query ("SELECT * FROM produk WHERE kodeproduk='$kodeproduk'",$connection)or die (mysql_error());
$jumlah = mysql_num_rows($query); 
while ($row=mysql_fetch_array($query)) { 
$iddata = $row['iddata'];
$hqkodeproduk = $row['kodeproduk'];
$hqnamaproduk = $row['namaproduk'];
$hqphotoproduk = $row['photoproduk'];
$hqhargaproduk = $row['hargaproduk'];
}

$totalpurchase = $hqhargaproduk*$quantityorder;

$query = "INSERT INTO markettoday (tanggal, emailmember, kodeproduk, namaproduk, photoproduk, hargaproduk, quantityorder, totalpurchase) VALUES ('$tanggaltoday','$emailmember','$kodeproduk','$hqnamaproduk','$hqphotoproduk','$hqhargaproduk','$quantityorder','$totalpurchase')";
mysql_query($query);
?>

<META HTTP-EQUIV=Refresh CONTENT='0; URL=../member.php?kodekontenmember=markettoday'>
<script type="text/javascript">
alert("Product has been added to Your Market Today")
</script>

<?php	
}
?>