<?php
session_start();

if(!isset($_SESSION['emailmember'])){
		die("
		<script type='text/javascript'>
		alert('Sorry, You must Login before Access...!!!')
		</script>
		
		<META HTTP-EQUIV=Refresh CONTENT='0; URL=publik.php?kodekontenpublik=memberarea&title=Member Area'>
		"); }
?>

<?php

include "../koneksi/database.php";

$oldpasswordmember = md5($_POST['oldpasswordmember']);
$newpasswordmember = md5($_POST['newpasswordmember']);
$newconfirmpasswordmember = md5($_POST['newconfirmpasswordmember']);

if("$oldpasswordmember"=="$passwordmember")
{
	
	if("$newpasswordmember"=="$newconfirmpasswordmember")
	{
		
		$query = "UPDATE member SET passwordmember='$newpasswordmember' WHERE emailmember='$emailmember'";
		mysql_query($query);
		
		unset($_SESSION['namalengkapmember']);
		unset($_SESSION['emailmember']);
    	unset($_SESSION['passwordmember']);
	?>	
    
    	<META HTTP-EQUIV=Refresh CONTENT='0; URL=../publik.php?kodekontenpublik=memberarea&title=Member Area'>

		<script type="text/javascript">
		alert("Your Password has been Changed, You must login...!!!")
		</script>
		
	<?php	
	}
	else
	{
	?>
    
		<script type="text/javascript">
		alert("Sorry, New Password & New Confirm Password is not same...!!!")
		</script>
        
		<META HTTP-EQUIV=Refresh CONTENT='0; URL=../member.php?kodekontenmember=userprofile'>
	
	<?php
    }
	
}
else
{
?>

	<script type="text/javascript">
	alert("Sorry, Your old password is wrong...!!!")
	</script>
        
	<META HTTP-EQUIV=Refresh CONTENT='0; URL=../member.php?kodekontenmember=userprofile'>

<?php
}
?>