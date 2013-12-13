<?php session_start(); 
include "koneksi.php"; 
$email=$_POST['email']; 
$password=$_POST['password']; 
$query=mysql_query("select * from signin where email='$email' and password='$password'"); 
$cek=mysql_num_rows($query); 
if($cek){ 
$_SESSION['username']=$email; 
?>Anda berhasil login. silahkan menuju <a href="all_products.html">Halaman HOME</a><?php 
}else{ 
?>Anda gagal login. silahkan <a href="signin.php">Login kembali</a><?php 
echo mysql_error(); 
} 
?> 