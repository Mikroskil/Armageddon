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
$oldpasswordadmin = md5($_POST['oldpasswordadmin']);
$newpasswordadmin = md5($_POST['newpasswordadmin']);
$newconfirmpasswordadmin = md5($_POST['newconfirmpasswordadmin']);

if("$oldpasswordadmin"=="$password")
{
	
	if("$newpasswordadmin"=="$newconfirmpasswordadmin")
	{
		
		$query = "UPDATE administrator SET password='$newpasswordadmin' WHERE iddata='$iddata'";
		mysql_query($query);
		
		unset($_SESSION['iddata']);
		unset($_SESSION['namalengkap']);
		unset($_SESSION['username']);
    	unset($_SESSION['password']);
	?>	
    
    	<META HTTP-EQUIV=Refresh CONTENT='0; URL=../publik.php?kodekontenpublik=loginadmin&title=Administrator'>

		<script type="text/javascript">
		alert("Password has been Changed, You must login...!!!")
		</script>
		
	<?php	
	}
	else
	{
	?>
    
		<script type="text/javascript">
		alert("Sorry, New Password & New Confirm Password is not same...!!!")
		</script>
        
		<META HTTP-EQUIV=Refresh CONTENT='0; URL=../admin.php?kodekontenadmin=userprofile'>
	
	<?php
    }
	
}
else
{
?>

	<script type="text/javascript">
	alert("Sorry, Your old password is wrong...!!!")
	</script>
        
	<META HTTP-EQUIV=Refresh CONTENT='0; URL=../admin.php?kodekontenadmin=userprofile'>

<?php
}
?>