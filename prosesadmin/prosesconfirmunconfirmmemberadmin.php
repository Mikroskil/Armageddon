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

$action = $_GET['action'];
$tanggalpurchaseorder = $_GET['tanggalpurchaseorder'];
$emailmember = $_GET['emailmember'];

if("$action"=="confirm")
{
$query = "UPDATE confirmation SET statusadmin='valid' WHERE tanggalpurchaseorder='$tanggalpurchaseorder' AND emailmember='$emailmember'";
		mysql_query($query);
?>   

<META HTTP-EQUIV=Refresh CONTENT='0; URL=../admin.php?kodekontenadmin=pencariandatakonfirmasi&statuspencarian=belummencari'>
<script type="text/javascript">
alert("Ok, Member has been confirmed...!!!")
</script>

<?php
}


if($action=="unconfirm")
{
$query = "UPDATE confirmation SET statusadmin='notvalid' WHERE tanggalpurchaseorder='$tanggalpurchaseorder' AND emailmember='$emailmember'";
		mysql_query($query);
?>   
<META HTTP-EQUIV=Refresh CONTENT='0; URL=../admin.php?kodekontenadmin=pencariandatakonfirmasi&statuspencarian=belummencari'>
<script type="text/javascript">
alert("Ok, Member has been unconfirmed...!!!")
</script>
<?php
}
?>

<?php

if("$action"=="confirmok")
{
$query = "UPDATE confirmation SET statusadmin='valid' WHERE tanggalpurchaseorder='$tanggalpurchaseorder' AND emailmember='$emailmember'";
		mysql_query($query);
?>   

<META HTTP-EQUIV=Refresh CONTENT='0; URL=../admin.php?kodekontenadmin=semuadatakonfirmasimember'>
<script type="text/javascript">
alert("Ok, Member has been confirmed...!!!")
</script>

<?php
}


if($action=="unconfirmok")
{
$query = "UPDATE confirmation SET statusadmin='notvalid' WHERE tanggalpurchaseorder='$tanggalpurchaseorder' AND emailmember='$emailmember'";
		mysql_query($query);
?>   
<META HTTP-EQUIV=Refresh CONTENT='0; URL=../admin.php?kodekontenadmin=semuadatakonfirmasimember'>
<script type="text/javascript">
alert("Ok, Member has been unconfirmed...!!!")
</script>
<?php
}
?>