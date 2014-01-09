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

$newfullname = $_POST['newfullname'];

$query = "UPDATE member SET namalengkapmember='$newfullname' WHERE
emailmember='$emailmember'";
mysql_query($query);

unset($_SESSION['namalengkapmember']);
$_SESSION['namalengkapmember'] = $newfullname;
?>

<META HTTP-EQUIV=Refresh CONTENT='0; URL=../member.php?kodekontenmember=userprofile'>

<script type="text/javascript">
alert("Your User Profile has been Changed...!!!")
</script>