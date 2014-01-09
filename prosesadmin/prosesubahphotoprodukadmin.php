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
$iddataproduk = $_GET['iddataproduk'];

include "../koneksi/database.php";

if($_FILES['photoproduk']['name']=="")
{
?>

<META HTTP-EQUIV=Refresh CONTENT='0; URL=../admin.php?kodekontenadmin=ubahproduk&iddata=<?php echo $iddataproduk; ?>'>
<script type="text/javascript">
alert("Sorry, Product Photo Cannot change...!!!")
</script>

<?php
}
else
{
//hapus pasphoto dulu
$query = "SELECT * FROM produk WHERE iddata='$iddataproduk'";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
$pasphotodelete = $data['photoproduk'];
unlink("../img/produk/".$pasphotodelete);

//ganti pasphoto baru
$uploaddir = '../img/produk/'; // setting nama folder tempat upload
$fileName = $_FILES['photoproduk']['name']; // membaca nama file yang diupload
$tmpName  = $_FILES['photoproduk']['tmp_name']; // nama file temporary yang akan disimpan di server
$fileSize = $_FILES['photoproduk']['size']; // membaca ukuran file yang diupload
$fileType = $_FILES['photoproduk']['type']; // membaca jenis file yang diupload

$query = "UPDATE produk SET photoproduk='$fileName' WHERE
iddata='$iddataproduk'";
mysql_query($query);

$uploadfile = $uploaddir . $fileName;
move_uploaded_file($_FILES['photoproduk']['tmp_name'], $uploadfile)

?>

<META HTTP-EQUIV=Refresh CONTENT='0; URL=../admin.php?kodekontenadmin=semuaproduk'>
<script type="text/javascript">
alert("Product Phote has been changed...!!!")
</script>

<?php
}
?>