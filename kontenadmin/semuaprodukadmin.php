<div class="page-header">
            <h2>All Product Items</h2>
</div>
           
<ul class="thumbnails"> 

<?php
include "koneksi/database.php";


$dataPerPage = 5;
if(isset($_GET['page']))
{
    $noPage = $_GET['page'];
} 
else $noPage = 1;
$offset = ($noPage - 1) * $dataPerPage;  


$query=mysql_query ("SELECT * FROM produk ORDER BY `produk`.`kodeproduk` DESC LIMIT $offset, $dataPerPage",$connection)or die (mysql_error());
$jumlah = mysql_num_rows($query); 
while ($row=mysql_fetch_array($query)) { 
$iddata = $row['iddata'];
$kodeproduk = $row['kodeproduk'];
$namaproduk = $row['namaproduk'];
$photoproduk = $row['photoproduk'];
$hargaproduk = $row['hargaproduk'];
$detailproduk = $row['detailproduk'];
?>

<div class="thumbnail">
<table width="1028" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" colspan="3">
      <font color="#0066FF"><h3><?php echo "$namaproduk"; ?></h3></font>
    </td>
    </tr>
  <tr>
    <td width="372" height="275" rowspan="3" valign="top">
      <img src="img/produk/<?php echo "$photoproduk"; ?>" alt="product name">
    </td>
    <td height="117" colspan="2" align="justify" valign="top"><strong>Product Detail : <?php echo "$detailproduk"; ?></strong></td>
  </tr>
  <tr>
    <td height="101" colspan="2" align="justify" valign="top"><font color="#FF0000"><h3><strong>Price Product : Rp <?php echo $hargaproduk; ?> ,-</strong></h3></font></td>
    
  </tr>
  <tr>
    <td width="130" align="justify" valign="top">
    <strong><h3><a href="admin.php?kodekontenadmin=ubahproduk&iddata=<?php echo $iddata; ?>" class="btn">Edit Product</a></h3></strong>
    </td>
    <td width="526" align="justify" valign="top">
    <strong><h3><a href="prosesadmin/proseshapusprodukadmin.php?iddata=<?php echo $iddata; ?>" class="btn">Delete Product</a></h3></strong>
    </td>
  </tr>
</table> 
</div>
<p>&nbsp;</p>
<?php
}
?>
</ul>

<?php
$query = "SELECT COUNT(*) AS jumData FROM produk";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
$jumData = $data['jumData'];
// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
$jumPage = ceil($jumData/$dataPerPage);
?>

            <div class="pagination pagination-centered">
              <ul>            
<?php
//previous page
if($noPage=='1')
{
?>
<li class="disabled">
                  <a href="#">&laquo;</a>
</li>
<?php
}
else if($noPage > 1)
{
?>
<li>
                  <a href=
                  <?php
                  echo "'".$_SERVER['PHP_SELF']."?kodekontenadmin=semuaproduk&page=".($noPage-1)."'";
                  ?>
                  >&laquo;</a>
</li>
<?php
}
?>

<?php
if($jumPage >= 1)
{
$nomorhalaman=1;
while($nomorhalaman <= $jumPage)
{
?>
<li
<?php
if("$noPage"=="$nomorhalaman")
{
	echo " class=active";
}
?>
>
<?php
echo "<a href='".$_SERVER['PHP_SELF']."?kodekontenadmin=semuaproduk&page=".($nomorhalaman)."'>";
echo "$nomorhalaman";
echo "</a>";
?>
</li>
<?php
$nomorhalaman++;
}
}
?>

<?php
//next page
if($noPage >= $jumPage)
{
?>
				<li class=disabled>
                  <a href="#">&raquo;</a>
				</li>
<?php
}
else if($jumPage > 1)
{
	echo "
	<li><a href='".$_SERVER['PHP_SELF']."?kodekontenadmin=semuaproduk&page=".($noPage+1)."'>";
?>
                  &raquo;</a>
</li>
<?php
}
?>
                
                
                
              </ul>
            </div>


<hr />