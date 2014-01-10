<div class="page-header">
            <h2>Product Items</h2>
</div>
           
<ul class="thumbnails"> 

<?php
include "koneksi/database.php";


$dataPerPage = 4;
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

<form action="prosesmember/prosestambahprodukkemarkettodaymember.php?kodeproduk=<?php echo "$kodeproduk"; ?>" method="POST">
<div class="thumbnail">
<table width="1028" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" colspan="4">
      <font color="#0066FF"><h3><?php echo "$namaproduk"; ?></h3></font>
    </td>
    </tr>
  <tr>
    <td height="275" colspan="2" rowspan="4" valign="top">
    <img src="img/produk/<?php echo "$photoproduk"; ?>" alt="product name">
    </td>
    <td height="137" colspan="2" align="justify" valign="top">
      <strong><?php echo "$detailproduk"; ?></strong></td>
    
  </tr>
  <tr>
    <td height="20" colspan="2" align="justify" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="147" height="37" align="justify" valign="top"><strong><h4>Quantity Order : </h4></strong></td>
    <td width="509" align="justify" valign="top">
      <select name="quantityorder" id="quantityorder">
        <?php
		$vop = 1;
		while($vop <= 50)
		{
			echo "<option value='$vop'>$vop</option>";
			$vop++;
		}
		?>
      </select>
    </td>
  </tr>
  <tr>
    <td height="21" colspan="2" align="justify" valign="top"><strong><h3><font color="#0066FF">Rp <?php echo "$hargaproduk"; ?>,-</font></h3></strong></td>
  </tr>
  <tr>
    <td width="171" height="32" valign="top">
    
    <p align="center">
    <div>
    <input name="Submit" type="submit" class="btn btn-primary btn-large" value="Add Market Today">
    </div>
    &nbsp;
    </td>
    <td width="201" valign="center">
    <a href="product.html" class="btn">Lihat Detail</a></p>
    </td>
    <td height="32" colspan="2" valign="top">&nbsp;</td>
    
    
  </tr>
</table> 
</div>
</form>
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
                  echo "'".$_SERVER['PHP_SELF']."?kodekontenmember=produk&page=".($noPage-1)."'";
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
echo "<a href='".$_SERVER['PHP_SELF']."?kodekontenmember=produk&page=".($nomorhalaman)."'>";
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
	<li><a href='".$_SERVER['PHP_SELF']."?kodekontenmember=produk&page=".($noPage+1)."'>";
?>
                  &raquo;</a>
</li>
<?php
}
?>
                
                
                
              </ul>
            </div>


<hr />