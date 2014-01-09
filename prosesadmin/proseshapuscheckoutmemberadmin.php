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
$tanggal = $_GET['tanggal'];
$emailmember = $_GET['emailmember'];

include "../koneksi/database.php";

$query = "DELETE FROM checkout WHERE tanggal ='$tanggal' AND emailmember='$emailmember'";
mysql_query($query);
?>

<META HTTP-EQUIV=Refresh CONTENT='0; URL=../admin.php?kodekontenadmin=semuadatacheckoutmember'>

<script type="text/javascript">
alert("Data Checkout Member has been deleted...!!!")
</script>