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

$iddata = $_GET['iddata'];
$namalengkap = $_POST['namalengkap'];
$username = $_POST['username'];

$query = "UPDATE administrator SET namalengkap='$namalengkap',username='$username' WHERE
iddata='$iddata'";
mysql_query($query);

unset($_SESSION['namalengkap']);
unset($_SESSION['username']);
$_SESSION['namalengkap'] = $namalengkap;
$_SESSION['username'] = $username;
?>

<META HTTP-EQUIV=Refresh CONTENT='0; URL=../admin.php?kodekontenadmin=userprofile'>

<script type="text/javascript">
alert("User Profile has been Changed...!!!")
</script>