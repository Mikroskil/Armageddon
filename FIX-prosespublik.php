<?php

include "../koneksi/database.php";

$registerfullname = $_POST['registerfullname'];
$registeremail = $_POST['email'];
$registerpassword1 = md5($_POST['registerpassword1']);
$registerpassword2 = md5($_POST['registerpassword2']);

$data = mysql_query("SELECT * FROM member WHERE emailmember='$registeremail'");
$d = mysql_fetch_assoc($data);

if (!empty($d))
{
?>

<META HTTP-EQUIV=Refresh CONTENT='0; URL=../publik.php?kodekontenpublik=memberarea&title=Member Area'>
<script type="text/javascript">
alert("Sorry, E-Mail has been used...!!!")
</script>

<?php
}
else
{
	if("$registerpassword1"=="$registerpassword2")
{

$query = "INSERT INTO member (namalengkapmember, emailmember, passwordmember) VALUES ('$registerfullname','$registeremail','$registerpassword1')";
mysql_query($query);
?>

<META HTTP-EQUIV=Refresh CONTENT='0; URL=../publik.php?kodekontenpublik=memberarea&title=Member Area'>
<script type="text/javascript">
alert("You are Member in Armageddon, Please Login")
</script>

<?php	
}
else
{
?>

<META HTTP-EQUIV=Refresh CONTENT='0; URL=../publik.php?kodekontenpublik=memberarea&title=Member Area'>
<script type="text/javascript">
alert("Sorry, Password & Password Confirm is not same...!!!")
</script>

<?php
}
}
?>