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

$kontententangkami = $_POST['kontententangkami'];

$query = "UPDATE publikkonten SET kontenpublik='$kontententangkami' WHERE
iddata='2'";
mysql_query($query);
?>

<META HTTP-EQUIV=Refresh CONTENT='0; URL=../admin.php?kodekontenadmin=editpubliktentangkami'>

<script type="text/javascript">
alert("Ok, Content has been saved...!!!")
</script>