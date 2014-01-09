<?php
session_start();

include "koneksi/database.php";

$access = $_GET['access'];
$emailmember = $_POST['emailmember'];
$passwordmember = md5($_POST['passwordmember']);

$n = 1;
$prevN = mktime(0, 0, 0, date("m"), date("d") - $n, date("Y"));
$tanggalsatuharisebelumhariini = date("d-m-Y", $prevN);


if($access=="memberlogin"){
    $cek = mysql_query("SELECT * FROM member WHERE emailmember='$emailmember' AND passwordmember='$passwordmember'");
     if(mysql_num_rows($cek)==1){
     	$data = mysql_fetch_array($cek);
		
        $_SESSION['namalengkapmember'] = $data['namalengkapmember'];
		$_SESSION['emailmember'] = $data['emailmember'];
		$emailmember = $data['emailmember'];
		$_SESSION['passwordmember'] = $data['passwordmember'];

	 	$data = mysql_query("SELECT * FROM markettoday WHERE tanggal='$tanggalsatuharisebelumhariini' AND emailmember='$emailmember'");
		$d = mysql_fetch_assoc($data);

		if (!empty($d))
		{
			$query = "DELETE FROM markettoday WHERE tanggal='$tanggalsatuharisebelumhariini' AND 	emailmember='$emailmember'";			mysql_query($query);
		}
		else
		{
		}

        header("location:member.php?kodekontenmember=produk");
      
	  }else{
	  ?>
        
        <META HTTP-EQUIV=Refresh CONTENT='0; URL=publik.php?kodekontenpublik=memberarea&title=Member Area'>
		
		<script type="text/javascript">
		alert("Sorry, E-Mail/Password is Wrong...!!!")
		</script>
        
<?php
}


}else if($access=="memberlogout"){

   		unset($_SESSION['namalengkapmember']);
		unset($_SESSION['emailmember']);
    	unset($_SESSION['passwordmember']);
?>

		<script type="text/javascript">
		alert("Thank`s You for Comming Armageddon...!!!")
		</script>
        
        <META HTTP-EQUIV=Refresh CONTENT='0; URL=publik.php?kodekontenpublik=memberarea&title=Member Area'>
<?php
}