<?php
session_start();

include "koneksi/database.php";

$access = $_GET['access'];
$username = $_POST['username'];
$password = md5($_POST['password']);

if($access=="adminlogin"){
    $cek = mysql_query("SELECT * FROM administrator WHERE username='$username' AND password='$password'");
     if(mysql_num_rows($cek)==1){
     	$data = mysql_fetch_array($cek);
		
		$_SESSION['iddata'] = $data['iddata'];
        $_SESSION['namalengkap'] = $data['namalengkap'];
		$_SESSION['username'] = $data['username'];
		$_SESSION['password'] = $data['password'];

	 	header("location:admin.php?kodekontenadmin=semuatidakterkonfirmasi");
      
	  }else{
	  ?>
        
        <META HTTP-EQUIV=Refresh CONTENT='0; URL=publik.php?kodekontenpublik=loginadmin&title=Administrator'>
		
		<script type="text/javascript">
		alert("Sorry, Username/Password is Wrong...!!!")
		</script>
        
<?php
}


}else if($access=="adminlogout"){

		unset($_SESSION['iddata']);
   		unset($_SESSION['namalengkap']);
		unset($_SESSION['username']);
    	unset($_SESSION['password']);
?>

		<script type="text/javascript">
		alert("You are LogOut from Administrator...!!!")
		</script>
        
        <META HTTP-EQUIV=Refresh CONTENT='0; URL=publik.php?kodekontenpublik=loginadmin&title=Administrator'>
<?php
}
?>