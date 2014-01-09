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

include "../koneksi/database.php";

$tanggalpurchaseorder = $_GET['tanggalpurchaseorder'];
$emailmember = $_GET['emailmember'];

$query = "UPDATE confirmation SET statusadmin='valid' WHERE tanggalpurchaseorder='$tanggalpurchaseorder' AND emailmember='$emailmember'";
		mysql_query($query);
?>   

<META HTTP-EQUIV=Refresh CONTENT='0; URL=../admin.php?kodekontenadmin=semuatidakterkonfirmasi'>
<script type="text/javascript">
alert("Ok, Member Confirmation has been confirmed...!!!")
</script>